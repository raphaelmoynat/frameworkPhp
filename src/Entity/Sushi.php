<?php

namespace App\Entity;

use App\Repository\SushiRepository;
use Core\Attributes\TargetRepository;
use Core\Attributes\Table;


#[TargetRepository(name: SushiRepository::class)]
#[Table(name:"sushis")]
class Sushi
{





}