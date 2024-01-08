<?php

namespace App\Repository;

class CommentRepository extends Repository
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
}