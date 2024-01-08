<?php

namespace Core\Http;

class Response
{


    public static function redirect(string $route = null)
    {
        if(!$route){
            header("Location: index.php");
            exit;
        }else{
            header("Location: ${route}");
            exit;
        }

    }

}