<?php


namespace App\Controllers;

use App\services\AgentService;
use App\services\PropertyService;
use DOMDocument;

class IndexController extends BaseController
{
    public function show()
    {
        $propertyService = new PropertyService();
        $properties = $propertyService->all();
        $listings = array();
        for($i=0; $i<5; $i++){
            $property = $properties[$i];
            $propertyType = $property->propertyType;
            $listing = array('propertyType' => $propertyType, 'property' => $property);
            $listings[$i] = $listing;
        }
        return view('home', ['listings' => $listings]);
    }
}