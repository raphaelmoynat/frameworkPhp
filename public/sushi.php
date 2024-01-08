<?php

use App\Controller\SushiController;
require_once "../vendor/autoload.php";

$sushiController = new SushiController();
$sushiController->show();