<?php


namespace App\services;


use App\models\PropertyType;

class PropertyTypeService extends BaseService
{

    protected function getModelName(): string
    {
        return PropertyType::class;
    }
}