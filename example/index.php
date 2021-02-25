<?php
require_once __DIR__.'/../vendor/autoload.php';
use Uaction\config;

$action = new config();

$action->setSpm(3);
echo $action->getSpm();

