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

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="h-100">

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>

<?php include "includes/nav.php"; ?>
<header class="video-container h-100 position-relative overflow">
    <div class="video">
        <video playsinline autoplay muted loop id="myVideo" class="d-block position-absolute">
            <source src="images/pexels-mart-production-7330180.mp4">
        </video>
    </div>
    <div class="logo d-xl-none d-block">
        <img src="images/logo%20med.svg">
    </div>
    <div class="d-none d-xl-block text-light  logo">
        <h1 class="oplevelse text-center">
            En unik oplevelse
        </h1>
        <p class="text-center mt-2">
            Skræddersyet lige til dig.
        </p>
    </div>
    <div class="btn1 m-2 ">
        <a  class="btn-minFarve btn  btn-btn1   d-flex justify-content-center rounded-0 " href="Booking.php">
            <p>LAV EN RESERVATION</p>
        </a>
        <a  class="btn btn-minFarve btn-btn1  d-flex mt-3 justify-content-center rounded-0" href="#Tid">
            <p>ÅBNINGSTIDER</p>
        </a>
    </div>

</header>


<section class="row gx-0">
    <div class="col-md-6">
        <div class="d-flex justify-content-center mt-3">
            <img class=" d-flex justify-content-center w-25 mt-3 " src="images/logosortudenslogan%20.svg">
        </div>
        <p class="mt-3 p-3">
            Hos Marittima ønsker vi at skabe en god oplevelse for hele familien.

            Marittima blev skabt ud fra drømmen om en vinbar. Historien bag Marius Mortensen går hånd i hånd med Skibet
            Marittima, og fører den næste generations historie videre.

            Folk der har været på skibet vil være i stand til at kunne fortælle om historier om dengang de holdt fest på
            bølgen blå, med den synlige solnedgang ud af vinduet, lige før den når halvvejs under horisonten.

        </p>

        <div class="mb-3 p-3">
            <a class="btn btn-btn1" href="Omkring%20os.php">LÆS MERE</a>
        </div>
    </div>

    <div class="col-md-6">
        <img class="img-fluid w-100" src="images/vin.png" alt="vin">
    </div>

</section>

<section class="row gx-0">
    <div class="col-md-6 order-lg-2">
        <h2 class="text-center mt-4">Private Arrangementer</h2>
        <p class="mt-3 p-3">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua.

            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
            est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

            At vero eos et accusam et justo duo dolores et ea
        </p>

        <div class="mb-3 p-3">
            <a class="btn btn-btn1" href="Omkring%20os.php">LÆS MERE</a>
        </div>
    </div>

    <div class="col-md-6 order-lg-1 ">
        <img class="w-100" src="images/w-vin.png" alt="vin2">
    </div>

</section>
<section class="bg-om">
    <h2 class="text-center pt-4 text-light">
        VINOTEQUE
    </h2>
    <p class="text-center mt-3 text-light">
        Strandvejen 28, 4800 Nykøbing Falster
    </p>
    <h2  class="mt-3 text-center text-light">
        Åbningstider
    </h2>
    <div id="Tid" class="row mx-auto m-w">
        <div class="col-6">
            <ul class="list-unstyled  d-flex flex-column align-items-center text-light">
                <li class="p-2">
                    <p>
                        Mandag
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        Tirsdag
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        Onsdag
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        Torsdag
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        Fredag
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        Lørdag
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        Søndag
                    </p>
                </li>


            </ul>
        </div>
        <div class="col-6">
            <ul class="list-unstyled  d-flex flex-column align-items-center text-light ">
                <li class="p-2">
                    <p>
                        18.00 - 02.30
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        18.00 - 02.30
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        18.00 - 02.30
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        18.00 - 02.30
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        18.00 - 02.30
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        18.00 - 02.30
                    </p>
                </li>
                <li class="p-2">
                    <p>
                        18.00 - 02.30
                    </p>
                </li>
        </div>
    </div>
</section>


<?php include "includes/footer.php"; ?>

</body>
</html>


