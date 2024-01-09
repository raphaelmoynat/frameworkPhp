<?php
namespace App\Controller;

use App\Repository\CommentRepository;
use Core\Controller\Controller;

class CommentController extends Controller
{

    public function create()
    {
        if(!isset($_POST['content']) || empty($_POST['content'])){

            return $this->redirect();        }

        if(!isset($_POST['sushiId']) || !ctype_digit($_POST['sushiId']) )
        {
            return $this->redirect();
        }

        $commentContent = $_POST['content'];
        $sushiId = $_POST['sushiId'];

        $modelComment = new CommentRepository();

        $modelComment->insert($commentContent, $sushiId);

        return $this->redirect();    }

    public function delete(){
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();        }

        $id = $_GET['id'];

        $modelComment = new CommentRepository();
        $comment = $modelComment->find($id);
        $idSushi = $comment['sushi_id'];

        $modelComment->delete($id);

        return $this->redirect();    }
}