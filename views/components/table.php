<table class="table">
    <tr>
        <th>ID</th>
        <th>Title
            <?php if (isset($_GET['sort']) && ($_GET['sort']) == 2) { ?>
                <form action="" method="get">
                    <?php if (isset($_GET['filter'])) { ?>
                        <input type="hidden" name="filter" value="<?= $_GET['filter'] ?>">
                    <?php } ?>
                    <button name="sort" value="1" type="submit">▲</button>
                </form>
            <?php }
            if (!isset($_GET['sort']) || ($_GET['sort']) != 2) {  ?>
                <form action="" method="get">
                    <?php if (isset($_GET['filter'])) { ?>
                        <input type="hidden" name="filter" value="<?= $_GET['filter'] ?>">
                    <?php } ?>
                    <button name="sort" value="2" type="submit">▼</button>
                </form>
            <?php } ?>
        </th>
        <th>Genre
            <?php if (isset($_GET['sort']) && ($_GET['sort']) == 4) { ?>
                <form action="" method="get">
                    <?php if (isset($_GET['filter'])) { ?>
                        <input type="hidden" name="filter" value="<?= $_GET['filter'] ?>">
                    <?php } ?>
                    <button name="sort" value="3" type="submit">▲</button>
                </form>
            <?php }
            if (!isset($_GET['sort']) || ($_GET['sort']) != 4) {  ?>
                <form action="" method="get">
                    <?php if (isset($_GET['filter'])) { ?>
                        <input type="hidden" name="filter" value="<?= $_GET['filter'] ?>">
                    <?php } ?>
                    <button name="sort" value="4" type="submit">▼</button>
                </form>
            <?php } ?>
        </th>
        <th>Author
            <?php if (isset($_GET['sort']) && ($_GET['sort']) == 6) { ?>
                <form action="" method="get">
                    <?php if (isset($_GET['filter'])) { ?>
                        <input type="hidden" name="filter" value="<?= $_GET['filter'] ?>">
                    <?php } ?>
                    <button name="sort" value="5" type="submit">▲</button>
                </form>
            <?php }
            if (!isset($_GET['sort']) || ($_GET['sort']) != 6) {  ?>
                <form action="" method="get">
                    <?php if (isset($_GET['filter'])) { ?>
                        <input type="hidden" name="filter" value="<?= $_GET['filter'] ?>">
                    <?php } ?>
                    <button name="sort" value="6" type="submit">▼</button>
                </form>
            <?php } ?>
        </th>
        <th>show</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php foreach ($books as $key => $book) { ?>
        <tr>
            <td> <?= $book->id  ?></td>
            <td> <?= $book->title ?></td>
            <td> <?= $book->genre ?></td>
            <td> <?= $book->author->surname . " " . $book->author->name ?></td>
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