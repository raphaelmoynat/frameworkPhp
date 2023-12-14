<div class="d-flex justify-content-center">


    <?php foreach ($sushis as $sushi): ?>

        <div class="sushi m-4">
            <p><strong>type :<?= $sushi['type'] ?></strong></p>
            <p><strong>description :<?= $sushi['description'] ?></strong></p>
            <p><strong>poisson : <?= $sushi['poisson'] ?></strong></p>
            <a href="sushi.php?id=<?= $sushi['id'] ?>" class="btn btn-success">voir</a>
            <a href="deleteSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-danger">supprimer</a>
            <a href="editSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-warning">edit</a>
        </div>



    <?php endforeach; ?>

</div>
