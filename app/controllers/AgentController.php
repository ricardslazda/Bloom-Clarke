<?php


namespace App\controllers;


use App\services\AgentService;

class AgentController
{
    public function all()
    {
        $agentService = new AgentService();
        $agents = $agentService->all();
        return view('agents', ['agents' => $agents]);
    }
}