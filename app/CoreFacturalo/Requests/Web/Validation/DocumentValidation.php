<?php

namespace App\CoreFacturalo\Requests\Web\Validation;

use App\Models\Tenant\Configuration;

class DocumentValidation
{
    public static function validation($inputs) {
        $configuration = Configuration::first();
        if($configuration->multi_companies){
            unset($inputs['series_id']);
        }else{
            $series = Functions::findSeries($inputs);
            $inputs['series'] = $series->number;
            unset($inputs['series_id']);
        }
        
        Functions::DNI($inputs);
        Functions::identityDocumentTypeInvoice($inputs);

        return $inputs;
    }
}