<form action="" method="post" class="form-control">

    <input value="<?= $sushi['type'] ?>" placeholder="type" type="text" name="type" class="form-control">
    <input value="<?= $sushi['description'] ?>" placeholder="description" type="text" name="description"  class="form-control">
    <input value="<?= $sushi['poisson'] ?>" placeholder="poisson" type="text" name="poisson" class="form-control">
    <button name="id" value="<?= $sushi['id'] ?>" class="btn btn-primary" type="submit" >Envoyer</button>

</form>