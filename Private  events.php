<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Marittima</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php include "includes/nav.php";?>
<header>
    <!--    <div class="history">-->
    <!--        <img src="images/ship.jpeg" alt="ship">-->
    <!--    </div>-->
    <div class="tekst text-light logo text-center">
        <h2 class="oplevelse p-2 justify-content-center d-flex">
            Private events
        </h2>
        <p class="d-none d-md-block historie text-light">
            Lej vores smukke lokaler til din næste firmafest, fødselsdag eller private vinsmagning.
        </p>
    </div>
</header>

<div class="ship h-100 w-100">
    <img src="images/ship.jpeg" alt="ship" class="h-100 w-100">
    <div class="icon position-absolute bottom-0 text-center w-100 text-dark">
        <i class="fa-solid fa-chevron-down fa-2x"></i>
    </div>
</div>

<div class="container-fluid flex-column text-center">
    <div class="row w-50 h-50">
        <div class="col">
            1 of 2
        </div>
        <div class="col w-50 h-50">
            2 of 2
        </div>
    </div>
</div>





<?php include "includes/footer.php";?>

</body>
</html>
