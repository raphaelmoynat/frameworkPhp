

<div class="sushi">
    <p><strong>type :<?= $sushi['type'] ?></strong></p>
    <p><strong>description :<?= $sushi['description'] ?></strong></p>
    <p><strong>poisson : <?= $sushi['poisson'] ?></strong></p>
    <a href="/" class="btn btn-secondary">retour</a>
</div>

<div class="comments">

    <?php foreach($comments as $comment): ?>

        <div class="comment border border-dark">
            <p><strong><?= $comment['content'] ?></strong></p>
            <a href="deleteComment.php?id=<?=$comment['id']?>" class="btn btn-danger">Supprimer</a>
        </div>

    <?php endforeach; ?>

</div>

<form action="createComment.php" method="post">
    <textarea  class="form-control" cols="30" rows="3" name="content" placeholder="commenter ce sushi"></textarea>
    <input type="hidden" name="sushiId" value="<?= $sushi['id'] ?>">
    <button class="form-control btn btn-success">post</button>
</form>



