<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__ . '/../app/config/_env.php';
if(!isset($_SESSION)) session_start();

new \App\classes\Database();
set_error_handler([new \App\classes\ErrorHandler(), 'handleErrors']);
require_once __DIR__ . '/../app/routing/routes.php';
new \App\RouteDispatcher($router);