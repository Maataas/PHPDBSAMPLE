<?php include "./routes.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./views/components/head.php" ?>
</head>

<body>
    <?php include "./views/components/navbar.php" ?>
    <a href="./index.php"> <h1 class="text-center">Biblioteka</h1></a>
   
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php if (isset($_SESSION['success'])) {
                echo
                '<div class="alert alert-success" role="alert">
                 '. $_SESSION['success'] .'
                </div>';
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['errors'])) {
                foreach ($_SESSION['errors'] as  $errorMsg) {
                    echo
                '<div class="alert alert-danger" role="alert">
                 '. $errorMsg .'
                </div>';
                }
                unset($_SESSION['errors']);
            }


            ?>
            <!-- <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
            </div> -->
            <?php include "./views/components/form.php" ?>
            <?php include "./views/components/sortFilter.php" ?>
            <?php include "./views/components/table.php" ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</body>

</html>