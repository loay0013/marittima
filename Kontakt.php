<!DOCTYPE html>
<html class="h-100" lang="da">
<head>
    <meta charset="utf-8">

    <title>Marittima</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel='icon' href='images/logosortudenslogan%20.svg' type='image/x-icon' sizes="40x40" />
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
            <h1 class="oplevelse">Kontakt os</h1>
            <p class="g-2">Kom nemt i kontakt med os her</p>
        </div>
    </div>
    <div class="icon position-absolute bottom-0 text-center w-100 text-light">
        <i class="fa-solid fa-chevron-down fa-2x p-3"></i>
    </div>
</header>
<section>
    <div class="text-center p-3">
        <h2 class="contact-us">
            Kontakt os her
        </h2>
    </div>
</section>


<section>
    <div class="d-flex justify-content-center p-5">
        <form action="mailto:#" method="post" enctype="text/plain" class="smalltext">
            <div class="pb-3">

                <input class="border-1 p-2" id="Name" name="Navn" type="text" placeholder="Navn">
            </div>

            <div class="pb-3" >

                <input class="border-1 p-2" id="email" name="email" type="email" placeholder="Email">
            </div>
            <div class="pb-3" >

                <textarea class="border-1 p-2"  rows="5" id="besked" name="besked" placeholder="Besked" ></textarea>
            </div>

            <div class="d-flex pb-3">
                <input   type="submit"  value="Send" class="d-flex btn-btn1 border-1 px-3">

            </div>
        </form>
    </div>
</section>


<?php include "includes/footer.php";?>
<script src="js/news.js"></script>
</body>
</html>
