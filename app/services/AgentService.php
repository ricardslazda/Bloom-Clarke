<?php


namespace App\services;


use App\models\Agent;

class AgentService extends BaseService
{

    protected function getModelName(): string
    {
        return Agent::class;
    }
}