<?php

namespace App\Entity;

use App\Repository\PizzaRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[Table(name: "pizzas")]
#[TargetRepository(PizzaRepository::class)]
class Pizza
{

}