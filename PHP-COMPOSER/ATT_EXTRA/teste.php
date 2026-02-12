<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('meu_app');
$log->pushHandler(new StreamHandler('app.log', Logger::INFO));

$log->info('IDCAP');