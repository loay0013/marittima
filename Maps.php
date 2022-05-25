<!DOCTYPE html>
<html class="h-100" lang="da">
<head>
    <meta charset="utf-8">

    <title>Marittima</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="h-100">

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php include "includes/nav.php";?>

<header id="hero2" class="container-fluid">
    <div class="overlay"></div>

    <div class="row">
        <div class="col-12 hero-text text-light text-center">
            <h1 class="oplevelse">Find os</h1>
            <p class="g-2">Find os nemt her på siden.</p>
        </div>
    </div>

    <div class="icon position-absolute bottom-0 text-center w-100 text-light">
        <i class="fa-solid fa-chevron-down fa-2x p-4"></i>
    </div>
</header>


<section class="row m-0 maps pt-5">
    <div class="p-3 col-md-4">
        <h2 class="text-center">
            Rutevejledning
        </h2>
        <div class="d-flex justify-content-center p-3">
        <a href="https://goo.gl/maps/a4qf6aA3pwes6oTz8" class="btn-btn2 border-0 text-light p-2 px-2 py-2 text-center  w-50 link-light text-decoration-none ">MAPS</a></div>
    </div>

    <div class="p-3 col-md-4">
    <h2 class="text-center">
        Hvor er vi?
    </h2>
        <p class="little-map text-center p-3">
            Find hurtigt ud af hvor
            vi befinder os.
        </p>
    </div>
    <div class="p-3 col-md-4">
        <h2 class="text-center">
            Adresse
        </h2>
        <p class="little-map text-center p-3">
            Strandvejen 28
            <br>
            4800 Nykøbing Falster
        </p>
    </div>

</section>



<section>
     <img class="img-fluid p-md-5 d-flex justify-content-center w-100 p-2" src="images/Maps-img.png" alt="Maps">
</section>



<?php include "includes/footer.php";?>
<script src="js/news.js"></script>
</body>
</html>
