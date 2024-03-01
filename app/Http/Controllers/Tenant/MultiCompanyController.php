<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\System\Client;
use App\Models\System\User;
use App\Models\Tenant\Company;
use App\Models\Tenant\Configuration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Environment;
use Hyn\Tenancy\Facades\TenancyFacade;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;

/**
 * Class CompanyController
 *
 * @package App\Http\Controllers\Tenant
 * @mixin  Controller
 */
class MultiCompanyController extends Controller
{

    public function index()
    {
        return view('tenant.multi_companies.index');
    }

    public function saveCompanies(Request $request)
    {
        DB::connection('tenant')
            ->table('multi_companies')
            ->delete();

        $companies = $request->companies;
        $host = $request->getHost();

        $partesDelHost = explode('.', $host);

        $subdominio = $partesDelHost[0];
        $fail = false;
        $website_ids = [];
        foreach ($companies as $company_id) {
            $found_company = Client::where('id', $company_id)->first();
            $hostname = DB::table('hostnames')->where('id', $found_company->hostname_id)->first();
            $website = DB::table('websites')->where('id', $hostname->website_id)->first();
            $hostname_id = $hostname != null ? $hostname->id : null;
            $website_id = $website != null ? $website->id : null;
            if ($hostname_id && $website_id) {
                $website_ids[] = $website_id;
                $company_exists = DB::connection('tenant')
                    ->table('companies')
                    ->where('website_id', $website_id)
                    ->first();
                if (!$company_exists) {
                    DB::connection('tenant')
                        ->table('multi_companies')
                        ->insert([
                            'client_id' => $company_id,
                            'hostname_id' => $hostname_id,
                            'website_id' => $website_id,
                        ]);

                    $tenancy = app(Environment::class);
                    $tenancy->tenant($found_company->hostname->website);

                    $company = Company::without(['identity_document_type'])
                        ->first();
                    $company_to_insert = $company->toArray();
                    $company_to_insert['updated_at'] = date('Y-m-d H:i:s');
                    $company_to_insert['id'] = null;
                    $company_to_insert['not_principal'] = true;
                    $company_to_insert['website_id'] = $website_id;
                    $subDom = $subdominio;
                    $uuid = config('tenant.prefix_database') . '_' . $subDom;
                    $this->restoreTenant($uuid);
                    $company = DB::connection('tenant')
                        ->table('companies')
                        ->insert($company_to_insert);
                }
            } else {
                $fail = true;
            }
        }
        $company = Company::active();
        $website_ids[] = $company->website_id;
        $companies_to_delete = DB::connection('tenant')
            ->table('companies')
            ->whereNotIn('website_id', $website_ids)
            ->get();
        foreach ($companies_to_delete as $company_to_delete) {
            $company_to_delete = Company::find($company_to_delete->id);
            $company_to_delete->delete();
        }
        


        if ($fail) {
            return [
                'success' => false,
                'message' => 'No se pudo guardar la configuración, por favor verifique que todas las empresas tengan un dominio asignado'
            ];
        }
        return [
            'success' => true,
            'message' => 'Datos guardados correctamente'
        ];
    }
    function restoreTenant($uuid)
    {
        $website = Website::where('uuid', $uuid)->first();
        $hostname = Hostname::where('website_id', $website->id)->first();
        $client = Client::where('hostname_id', $hostname->id)->first();
        $tenancy = app(Environment::class);
        $tenancy->tenant($client->hostname->website);
        $company = Company::active();
        $company->website_id = $website->id;
        $company->save();
    }
    public function saveConfiguration(Request $request)
    {
        $conf = $request->configuration;
        $multi_companies = $conf["multi_companies"];
        $configuration = Configuration::first();
        $configuration->multi_companies = $multi_companies;
        $configuration->save();
        return [
            'success' => true,
            'message' => 'Datos guardados correctamente'
        ];
    }
    public function login(Request $request)
    {
        $password = $request->password;
        $user = User::first();
        $loged = Hash::check($password, $user->password);
        $companies = [];
        $configuration = Configuration::select('multi_companies')
            ->first();
        if ($loged) {
            $companies = Client::all();
            $select_companies = DB::connection('tenant')
                ->table('multi_companies')
                ->pluck('client_id')
                ->toArray();;
        }
        return [
            'success' => $loged,
            'companies' => $companies,
            'selectCompanies' => $select_companies,
            'configuration' => $configuration,
        ];
    }
}
