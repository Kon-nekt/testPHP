<?php

use App\backend\src\Evaluator;
use Datto\JsonRpc\Http\Server;

require __DIR__ . '/../vendor/autoload.php';


$evaluator = new Evaluator();
$server = new Server($evaluator);

$server->reply();
