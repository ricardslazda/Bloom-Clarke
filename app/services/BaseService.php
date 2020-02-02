<?php


namespace App\services;

use Illuminate\Database\Eloquent\Model;
abstract class BaseService{
    public function update($model, array $data = []) : bool
    {
        $model ->fill($data);
        $model->update();
    }
    public function all(array $conditions = [])
    {
        $modelClass = $this->getModelName();
        return $modelClass::query()->where($conditions)->get();
    }
    public function one(array $conditions = [])
    {
        $modelClass = $this->getModelName();
        return $modelClass::query()->where($conditions)->first();
    }
    public function create(array $data = []) : model
    {
        $modelClass = $this->getModelName();
        $model = new $modelClass($data);
        $model->save();
        return $model;
    }
    protected abstract function getModelName() : string;
}