<?php
require_once "../bordel/debugmode.php";
require_once "../vendor/autoload.php";

$pizzaController = new App\Controller\PizzaController();
$pizzaController->index();