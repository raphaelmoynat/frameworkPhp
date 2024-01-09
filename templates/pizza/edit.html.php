<form action="" method="post" class="form-control">

    <input value="<?= $pizza['name'] ?>" placeholder="type" type="text" name="type" class="form-control">
    <input value="<?= $pizza['size'] ?>" placeholder="description" type="text" name="description"  class="form-control">
    <button name="id" value="<?= $pizza['id'] ?>" class="btn btn-primary" type="submit" >Envoyer</button>

</form>