<?php
require_once "../bordel/debugmode.php";
require_once "../bordel/logique.php";
require_once "../bordel/database.php";

if(isset($_POST['type']) && isset($_POST['description']) && isset($_POST['poisson']) && isset($_POST['id'])
) {
    $type = $_POST['type'];
    $description = $_POST['description'];
    $poisson = $_POST['poisson'];
    $id = $_POST['id'];

    updateSushi($type, $description, $poisson, $id);

    header("Location: sushi.php?id=$id");

}

$id = $_GET['id'];
$sushi = findSushi($id);

afficher('sushi/edit', ["sushi"=>$sushi,
    "pageTitle"=> $sushi['poisson'] ]);