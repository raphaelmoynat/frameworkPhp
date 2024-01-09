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
}