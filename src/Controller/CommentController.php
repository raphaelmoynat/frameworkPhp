<?php
namespace App\Controller;



use App\Model\Comment;

class CommentController
{

    public function create()
    {
        if(!isset($_POST['content']) || empty($_POST['content'])){

            header("Location: index.php");
        }

        if(!isset($_POST['sushiId']) || !ctype_digit($_POST['sushiId']) )
        {
            header("Location: index.php");

        }

        $commentContent = $_POST['content'];
        $sushiId = $_POST['sushiId'];

        $modelComment = new Comment();

        $modelComment->insert($commentContent, $sushiId);

        return header("Location: sushi.php?id=$sushiId");
    }

    public function delete(){
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            header('Location: index.php');
        }

        $id = $_GET['id'];

        $modelComment = new Comment();
        $comment = $modelComment->find($id);
        $idSushi = $comment['sushi_id'];

        $modelComment->delete($id);

        header("Location: sushi.php?id=$idSushi");
    }
}