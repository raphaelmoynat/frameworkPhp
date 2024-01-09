<?php
use App\Controller\PizzaController;
require_once "../vendor/autoload.php";


$createController = new PizzaController();
$createController->create();