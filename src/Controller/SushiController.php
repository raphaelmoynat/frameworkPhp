<?php
namespace Controller;

require_once "../src/Model/Sushi.php";
require_once "../src/Model/Comment.php";
require_once "../core/View/View.php";

class SushiController
{
    public function index()
    {

        $modelSushi = new \Model\Sushi();

        $sushis = $modelSushi->findAll();

        return \View::render("sushi/index", [
            "pageTitle"=>"Les Sushis",
            "sushis"=>$sushis]);


    }

    public function show()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            header("Location: index.php");
        }

        $id = $_GET['id'];

        $modelSushi = new \Model\Sushi();

        $sushi = $modelSushi->find($id);

        $modelComment = new \Model\Comment();

        $comments = $modelComment->findAllBySushi($id);

        return \View::render('sushi/show', ["sushi"=>$sushi,
            "comments"=>$comments,
            "pageTitle"=> $sushi['poisson'] ]);
    }

}