<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Author ID</th>
        <th>show</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php foreach ($books as $key => $book) { ?>
        <tr>
            <td> <?= $book->id  ?></td>
            <td> <?= $book->title ?></td>
            <td> <?= $book->genre ?></td>
            <td> <?= $book->authorId ?></td>
            <td><button class="btn btn-primary">show</button></td>
            <td>
                <form action="" method="get">
                    <input type="hidden" name="id" value="<?= $book->id ?>">
                    <button class="btn btn-success" name="edit">edit</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $book->id ?>">
                    <button class="btn btn-danger" name="destroy">delete</button>
                </form>
            </td>
        </tr>
    <?php  } ?>
</table>