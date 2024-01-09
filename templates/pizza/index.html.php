<div class="d-flex justify-content-center">


    <?php foreach ($pizzas as $pizza): ?>

        <div class="pizza m-4">
            <p><strong>nom :<?= $pizza['name'] ?></strong></p>
            <p><strong>taille :<?= $pizza['size'] ?></strong></p>
            <a href="deletePizza.php?id=<?= $pizza['id'] ?>" class="btn btn-danger">supprimer</a>
            <a href="editPizza.php?id=<?= $pizza['id'] ?>" class="btn btn-warning">edit</a>


            <a href="pizza.php?id=<?= $pizza['id'] ?>" class="btn btn-success">voir</a>

        </div>



    <?php endforeach; ?>

</div>
