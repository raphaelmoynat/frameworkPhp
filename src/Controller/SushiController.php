<?php
namespace App\Controller;


use App\Model\Sushi;
use App\Model\Comment;
use Core\View\View;

class SushiController
{
    public function index()
    {

        $modelSushi = new Sushi();

        $sushis = $modelSushi->findAll();

        return View::render("sushi/index", [
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

        $modelSushi = new Sushi();

        $sushi = $modelSushi->find($id);

        $modelComment = new Comment();

        $comments = $modelComment->findAllBySushi($id);

        return \View::render('sushi/show', ["sushi"=>$sushi,
            "comments"=>$comments,
            "pageTitle"=> $sushi['poisson'] ]);
    }

    public function create(){
        if(isset($_POST['type']) &&
            isset($_POST['description']) &&
            isset($_POST['poisson'])
        ){
            $type = $_POST['type'];
            $description = $_POST['description'];
            $poisson = $_POST['poisson'];

            $modelSushi = new Sushi();

            $modelSushi->insert($type, $description, $poisson);

            header("Location: index.php");



        }


        return \View::render("sushi/create", ["pageTitle"=> "nouveau sushi"]);
    }


    public function delete(){

        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            header('Location: index.php');
        }

        $id = $_GET['id'];

        $modelComment = new \Model\Sushi();

        $modelComment->delete($id);

        header('Location: index.php');
    }

    public function edit(){
        if(isset($_POST['type']) &&
            isset($_POST['description']) &&
            isset($_POST['poisson']) &&
            isset($_POST['id'])
        ) {
            $type = $_POST['type'];
            $description = $_POST['description'];
            $poisson = $_POST['poisson'];
            $id = $_POST['id'];


            $modelSushi = new \Model\Sushi();

            $modelSushi->update($type, $description, $poisson, $id);

            header("Location: sushi.php?id=$id");

        }


        $id = $_GET['id'];

        $modelSushi = new \Model\Sushi();
        $sushi = $modelSushi->find($id);

        return \View::render('sushi/edit', ["sushi"=>$sushi,
            "pageTitle"=> $sushi['poisson'] ]);
    }


}