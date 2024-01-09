<?php

use App\Controller\PizzaController;
require_once "../vendor/autoload.php";

$sushiController = new PizzaController();
$sushiController->show();