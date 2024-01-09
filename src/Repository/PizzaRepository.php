<?php

namespace App\Repository;

use App\Entity\Pizza;
use Core\Attributes\TargetEntity;

#[TargetEntity(name: Pizza::class)]
class PizzaRepository extends \Core\Repository\Repository
{
    public function insert(string $name, int $size):void
    {

        $query = $this->pdo->prepare("INSERT INTO pizzas SET name = :name, size = :size");

        $query->execute([
            "name"=>$name,
            "size"=>$size,
        ]);
    }

    public function update(string $name, string $size,  int $id):void
    {

        $query = $this->pdo->prepare("UPDATE pizzas SET name = :name, size = :size WHERE id = :id");

        $query->execute([
            "name" => $name,
            "size" => $size,
            "id" => $id
        ]);
    }
}