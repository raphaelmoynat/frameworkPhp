<?php require_once "../bordel/debugmode.php";
require_once "../bordel/logique.php";
require_once "../bordel/database.php";

if (isset($_GET['id']) || !ctype_digit($_GET['id'])){
    header("Location: index.php");
    }
$id = $_GET['id'];
deleteSushi($id);

header('Location: index.php');
