<?php

namespace Core\Controller;

use Core\Http\Response;
use Core\View\View;

abstract class Controller
{

    public function redirect(string $route = null)
    {
        return Response::redirect($route);
    }
    public function render($nomDeTemplate, $donnees)
    {
        return View::render($nomDeTemplate, $donnees);
    }

}