<?php

namespace App\Entity;


use App\Repository\CommentRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[TargetRepository(name: CommentRepository::class)]
#[Table(name: "comments")]
class Comment
{

    protected string $tableName = "comments";

    public function findAllBySushi(int $id):array
    {


        $queryComments = $this->pdo->prepare("SELECT * FROM comments WHERE sushi_id = :sushiId");

        $queryComments->execute([
            "sushiId"=>$id]);


        $comments = $queryComments->fetchAll();

        return $comments;
    }

    public function insert(string $content, int $sushiId):void
    {

        $query = $this->pdo->prepare("INSERT INTO comments SET content = :content, sushi_id = :sushiId");
        $query->execute([
            "content"=>$content,
            "sushiId"=>$sushiId
        ]);
    }

    public function delete(int $sushiId):void
    {

        $query = $this->pdo->prepare("DELETE FROM comments WHERE id = :sushiId");
        $query->execute([

            "sushiId"=>$sushiId
        ]);
    }
}