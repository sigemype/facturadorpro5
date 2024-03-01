<?php

namespace App\Http\Resources\Tenant;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Tenant\Configuration;
use App\Models\System\Client as Client ;
/**
 * Class CompanyResource
 *
 * @package App\Http\Resources\Tenant
 * @mixin JsonResource
 */
class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $configuration = Configuration::first();
        $config = Client::where('number',$this->number)->first(); 
         return [
            'is_rus' => (bool) $this->is_rus,
            'footer_text_template' => $this->footer_text_template,
            'mtc_auth' => $this->mtc_auth,
            'id' => $this->id,
            'number' => $this->number,
            'name' => $this->name,
            'trade_name' => $this->trade_name,
            'soap_send_id' => $this->soap_send_id,
            'soap_type_id' => $this->soap_type_id,
            'soap_username' => $this->soap_username,
            'soap_password' => $this->soap_password,
            'soap_url' => $this->soap_url,
            'certificate' => $this->certificate,
            'certificate_due' => $this->certificate_due,
            'logo' => $this->logo,
            'detraction_account' => $this->detraction_account,
            'logo_store' => $this->logo_store,
            'operation_amazonia' => (bool) $this->operation_amazonia,
            //'config_system_env' => (bool)$configuration->config_system_env,
            'img_firm' => $this->img_firm,
            'favicon' => $this->favicon,
            'cod_digemid' => $this->cod_digemid,
            'is_pharmacy' => $configuration->isPharmacy(),
            'integrated_query_client_id' => $this->integrated_query_client_id,
            'integrated_query_client_secret' => $this->integrated_query_client_secret,
            'config_system_env' => (bool) $config ? $config->config_system_env : false,
            'send_document_to_pse' => $this->send_document_to_pse,
            'url_send_cdr_pse' => $this->url_send_cdr_pse,
            'url_signature_pse' => $this->url_signature_pse,
            'client_id_pse' => $this->client_id_pse,
            'app_logo' => $this->app_logo,
            'footer_logo' => $this->footer_logo,
            'bg_default' => $this->bg_default,
            'soap_sunat_username' => $this->soap_sunat_username,
            'soap_sunat_password' => $this->soap_sunat_password,
            'api_sunat_id' => $this->api_sunat_id,
            'api_sunat_secret' => $this->api_sunat_secret,
            'pse' => (bool)$this->pse,
            'pse_token' => $this->pse_token,
            'pse_url' => $this->pse_url,
        ];
    }
}