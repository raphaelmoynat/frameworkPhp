<?php
require_once "../bordel/debugmode.php";
require_once "../src/Model/Comment.php";
require_once "../src/Model/Sushi.php";
if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
{
    header('Location: index.php');
}

$id = $_GET['id'];

$modelComment = new \Model\Comment();
$comment = $modelComment->find($id);
$idSushi = $comment['sushi_id'];

$modelComment->delete($id);

header("Location: sushi.php?id=$idSushi");
