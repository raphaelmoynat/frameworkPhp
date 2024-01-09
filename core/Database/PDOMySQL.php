<?php
namespace Core\Database;
class PDOMySQL
{

    public static function getPdo(){

        $dbHost = "localhost";
        $dbName = "nourriture";

        $username = "utilisateurS";
        $password = "azerty";

        $pdo = new \PDO(
            "mysql:host=$dbHost;dbname=$dbName",
            $username,
            $password,
            [
                \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_ASSOC
            ]
        );
        return $pdo;
    }




}