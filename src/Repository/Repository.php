<?php
namespace App\Repository;

use Core\Database\PDOMySQL;

abstract class Repository
{

    protected \PDO $pdo;



    protected string $tableName;


    public function __construct()
    {

        $this->pdo = PDOMySQL::getPdo();
    }

    public function findAll():array
    {


        $query = $this->pdo->query("SELECT * FROM $this->tableName");

        $items = $query->fetchAll();

        return $items;
    }

    public function find(int $id):array
    {


        $query = $this->pdo->prepare("SELECT * FROM $this->tableName WHERE id = :id");

        $query->execute([
            "id" => $id
        ]);

        $item = $query->fetch();

        return $item;
    }

    public function delete(int $id):void
    {

        $query = $this->pdo->prepare("DELETE FROM $this->tableName WHERE id = :id");
        $query->execute([
            "id"=>$id
        ]);

    }



}