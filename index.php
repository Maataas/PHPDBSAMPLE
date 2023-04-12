<?php include "./routes.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./views/components/head.php" ?>
</head>
<body>
    <?php include "./views/components/navbar.php" ?>
    <h1 class="text-center">Biblioteka</h1>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php include "./views/components/form.php" ?>
            <?php include "./views/components/table.php" ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</body>
</html>