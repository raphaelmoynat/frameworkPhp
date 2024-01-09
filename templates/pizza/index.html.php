<div class="d-flex justify-content-center">


    <?php foreach ($pizzas as $pizza): ?>

        <div class="sushi m-4">
            <p><strong>nom :<?= $pizza['name'] ?></strong></p>
            <p><strong>taille :<?= $pizza['size'] ?></strong></p>

            <a href="sushi.php?id=<?= $pizza['id'] ?>" class="btn btn-success">voir</a>

        </div>



    <?php endforeach; ?>

</div>
