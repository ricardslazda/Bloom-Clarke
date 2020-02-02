<?php

define('BASE_PATH', realpath(__DIR__.'/../../'));

$dotEnv = \Dotenv\Dotenv::CREATE(BASE_PATH);
$dotEnv->load();