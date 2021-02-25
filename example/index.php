<?php
require_once __DIR__.'/../vendor/autoload.php';
use Guanguans\config;

$action = new config();

$action->setSpm(3);
echo $action->getSpm();

