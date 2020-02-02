<?php

$router = new AltoRouter();
$router->setBasePath(getenv('APP_ROOT'));
$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');