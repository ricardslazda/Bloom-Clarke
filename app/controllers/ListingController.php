<?php


namespace App\controllers;


use App\models\Property;
use App\services\PropertyService;
use App\services\PropertyTypeService;

class ListingController
{
    public function all()
    {
        $propertyService = new PropertyService();
        $propertyTypeService = new PropertyTypeService();

        $properties = $propertyService->all();
        $propertyTypes = $propertyTypeService->all();

        $total = $properties->count();
        $object = new Property;

        list($properties, $links) = paginate(4, $total, 'properties', $object);
        return view('listings', ['properties' => $properties, 'propertyTypes'=>$propertyTypes, 'filter' => false, 'paginationLinks'=> $links]);
    }

    public function type($request)
    {
        $propertyTypeService = new PropertyTypeService();
        $propertyTypes = $propertyTypeService->all();
        foreach ($propertyTypes as $propertyType){
            if($propertyType['type'] == $request['type']){
                $properties = $propertyType->properties;
                return view('listings', ['properties' => $properties, 'filter' => true, 'propertyType' => $propertyType, 'paginationLinks'=> null]);
            }
        }
        return view('404');
    }

    public function listing($request)
    {
        $propertyTypeService = new PropertyTypeService();
        $propertyService = new PropertyService();
        $propertyType = $propertyTypeService->one(['type' => $request['type']]);
        $property = $propertyService->one(['id' => $request['id'], 'property_type_id' => $propertyType['id']]);
        $agent = $property->agent;
        if(isset($property)) {
            return view('listing', ['property' => $property, 'propertyType' => $propertyType, 'agent' => $agent]);
        }else{
            return view('404');
        }
    }
}