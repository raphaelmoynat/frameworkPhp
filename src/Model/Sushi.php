<?php

namespace App\Model;

class Sushi extends Model
{

    protected string $tableName = "sushis";




    public function insert(string $type, string $description, string $poisson):void
    {

        $query = $this->pdo->prepare("INSERT INTO sushis SET type = :type, description = :description, poisson = :poisson");

        $query->execute([
            "type"=>$type,
            "description"=>$description,
            "poisson"=>$poisson
        ]);
    }

    public function update(string $type, string $description, string $poisson, int $id):void
    {

        $query = $this->pdo->prepare("UPDATE sushis SET type = :type, description = :description, poisson = :poisson WHERE id = :id");

        $query->execute([
            "type" => $type,
            "description" => $description,
            "poisson" => $poisson,
            "id" => $id
        ]);
    }

    public function delete(int $id):void{
        $query = $this->pdo->prepare("DELETE FROM sushis WHERE id = :id");

        $query->execute([
            "id" => $id
        ]);
    }



}