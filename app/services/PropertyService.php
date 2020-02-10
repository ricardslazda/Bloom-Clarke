<?php


namespace App\services;


use App\models\Property;

class PropertyService extends BaseService
{

    protected function getModelName(): string
    {
        return Property::class;
    }
}