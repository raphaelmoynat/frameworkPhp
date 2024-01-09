<?php

namespace App\Controller;
use App\Repository\PizzaRepository;
class PizzaController extends \Core\Controller\Controller
{
    public function index()
    {

        $pizzaRepository = new PizzaRepository();

        $pizzas = $pizzaRepository->findAll();

        return $this->render("pizza/index", [
            "pageTitle"=>"Les Pizzas",
            "pizzas"=>$pizzas]);


    }

    public function show()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }

        $id = $_GET['id'];

        $pizzaRepository = new PizzaRepository();

        $pizza = $pizzaRepository->find($id);

        return $this->render("pizza/show", [
            "pagetTitle"=>"la pizza en cours",
            "pizza"=>$pizza
        ]);

    }

    public function delete(){

        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }

        $id = $_GET['id'];

        $pizzaRepository = new PizzaRepository();

        $pizzaRepository->delete($id);

        return $this->redirect("pizzas.php");
    }

    public function create(){
        if(isset($_POST['name']) &&
            isset($_POST['size'])
        ){
            $name = $_POST['name'];
            $size = $_POST['size'];


            $pizzaRepository = new PizzaRepository();

            $pizzaRepository->insert($name, $size);

            return $this->redirect("pizzas.php");



        }


        return $this->render("pizza/create", ["pageTitle"=> "nouvelle pizza"]);
    }

    public function edit()
    {
        if (isset($_POST['name']) &&
            isset($_POST['size'])
        ) {
            $name = $_POST['name'];
            $size = $_POST['size'];


            $modelSushi = new PizzaRepository();

            $modelSushi->update($name, $size);

            return $this->redirect("pizzas.php");

            $id = $_GET['id'];

            $pizzaRepository = new PizzaRepository();
            $pizza = $pizzaRepository->find($id);

            return $this->render('pizza/edit', ["pizza"=>$pizza,
                "pageTitle"=> $pizza['name'] ]);

        }
    }
}