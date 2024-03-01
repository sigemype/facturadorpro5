<?php

    namespace Modules\Suscription\Http\Resources;


use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function toArray($request)
    {
        $year = $request->input('year');
        return $this->collection->transform(function($row, $key) use ($year) {

            /** @var \App\Models\Tenant\Person $row */
            return  $row->getCollectionData(true,true,false,$year);
        });
    }
}
