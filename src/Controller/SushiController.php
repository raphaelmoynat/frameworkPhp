<?php
namespace App\Controller;



use App\Repository\CommentRepository;
use App\Repository\SushiRepository;
use Core\Controller\Controller;



class SushiController extends Controller
{
    public function index()
    {

        $modelSushi = new SushiRepository();

        $sushis = $modelSushi->findAll();

        return $this->render("sushi/index", [
            "pageTitle"=>"Les Sushis",
            "sushis"=>$sushis]);


    }

    public function show()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }

        $id = $_GET['id'];

        $modelSushi = new SushiRepository();

        $sushi = $modelSushi->find($id);

        $modelComment = new CommentRepository();

        $comments = $modelComment->findAllBySushi($id);

        return $this->render('sushi/show', ["sushi"=>$sushi,
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

            $modelSushi = new SushiRepository();

            $modelSushi->insert($type, $description, $poisson);

            return $this->redirect();



        }


        return $this->render("sushi/create", ["pageTitle"=> "nouveau sushi"]);
    }


    public function delete(){

        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }

        $id = $_GET['id'];

        $modelComment = new SushiRepository();

        $modelComment->delete($id);

        return $this->redirect();
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


            $modelSushi = new SushiRepository();

            $modelSushi->update($type, $description, $poisson, $id);

            return $this->redirect();

        }


        $id = $_GET['id'];

        $modelSushi = new SushiRepository();
        $sushi = $modelSushi->find($id);

        return $this->render('sushi/edit', ["sushi"=>$sushi,
            "pageTitle"=> $sushi['poisson'] ]);
    }


}