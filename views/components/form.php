<form class="pb-5" action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Knygos pavadinimas</label>
        <input type="text" class="form-control" name="title" value="<?= (isset($_GET['edit'])) ? $book->title : "" ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Knygos žanras</label>
        <input type="text" class="form-control" name="genre" value="<?= (isset($_GET['edit'])) ? $book->genre : "" ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Autoriaus id (laikina)</label>
        <input type="number" class="form-control" name="author_id" value="<?= (isset($_GET['edit'])) ? $book->authorId : "" ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <?php if (isset($_GET['edit'])) { ?>
        <input type="hidden" name="id" value="<?= $book->id ?>">
        <button class="btn btn-success" type="submit" name="update">upgrade it!</button>
    <?php } else { ?>
        <button class="btn btn-primary" type="submit" name="save">do it!</button>
    <?php } ?>
</form>