<?php

namespace Controller;



require_once "../src/Model/Sushi.php";
require_once "../core/View/View.php";

class CreateController
{
    public function create(){
        if(isset($_POST['type']) &&
            isset($_POST['description']) &&
            isset($_POST['poisson'])
        ){
            $type = $_POST['type'];
            $description = $_POST['description'];
            $poisson = $_POST['poisson'];

            $modelSushi = new \Model\Sushi();

            $modelSushi->insert($type, $description, $poisson);

            header("Location: index.php");



        }


        return \View::render("sushi/create", ["pageTitle"=> "nouveau sushi"]);
    }
}