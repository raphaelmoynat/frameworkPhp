<?php
require_once "../bordel/debugmode.php";
require_once "../vendor/autoload.php";
$sushiController = new App\Controller\SushiController();
$sushiController->index();