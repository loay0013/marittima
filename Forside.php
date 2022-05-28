<!DOCTYPE html>
<html class="h-100" lang="da">
<head>
    <meta charset="utf-8">

    <title>Marittima-Forside</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="h-100">

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
    <div class="d-none d-xl-block text-light logo">
        <h1 class="text-center">
            En unik oplevelse
        </h1>
        <p class="text-center mt-2">
            Skræddersyet lige til dig.
        </p>
    </div>
    <div class="btn1 m-2 ">
        <a class="button-forside btn  btn-btn1   d-flex justify-content-center rounded-0 " href="Booking.php">
            <p class="m-0">LAV EN RESERVATION</p>
        </a>
        <a class="button-forside btn btn-btn1  d-flex mt-3 justify-content-center rounded-0" href="#Tid">
            <p class="m-0">ÅBNINGSTIDER</p>
        </a>
    </div>

    <div class="icon position-absolute bottom-0 text-center w-100 text-light">
		<a href="#Forside" class="text-light"><i class="fa-solid fa-chevron-down fa-2x p-3"></i></a>
    </div>
</header>


<section id="Forside" class="row gx-0">
    <div class="col-md-6 container">
        <div class="d-flex justify-content-center mt-3">
            <img class=" d-flex justify-content-center w-25 mt-3 " src="images/logosortudenslogan%20.svg">
        </div>
        <p class="pt-3 mx-3 ">
            Hos Marittima ønsker vi at skabe en god oplevelse for hele familien.
            <br>
            Marittima blev skabt ud fra drømmen om en vinbar. Historien bag Marius Mortensen går hånd i hånd med Skibet
            Marittima, og fører den næste generations historie videre.

            Folk der har været på skibet vil være i stand til at kunne fortælle om historier om dengang de holdt fest på
            bølgen blå, med den synlige solnedgang ud af vinduet, lige før den når halvvejs under horisonten.

        </p>

        <div class="mx-3 mb-2 mb-md-0">
            <a class="btn btn-btn1 rounded-0" href="Omkring%20os.php">LÆS MERE</a>
        </div>
    </div>

    <div class="col-md-6">
        <img class="img-fluid w-100" src="images/vin.png" alt="vin">
    </div>
</section>

<section class="row gx-0">
    <div class="col-md-6 order-md-2">
        <h2 class="text-center mt-4 mx-3">Private Arrangementer</h2>
       <div class="d-flex  align-items-center">
        <p class="mx-3 pt-4">
            På skibet Marittima har vi et selskabsdæk som kan rumme op til 70 personer.
            Dækket lejes ud om weekenden til private arrangementer.
            Så hvis i har brug for et sted at holde konfirmation, bryllupsdag eller fødselsdag,
            så er vi altid klar til at byde jer velkommen ombord.
        </p>
    </div>
        <div class="mx-3 mb-2 mb-md-0">
            <a class="btn btn-btn1 rounded-0" href="Booking.php">LÆS MERE</a>
        </div>
    </div>

    <div class="col-md-6 order-md-1 ">
        <img class="w-100" src="images/w-vin.png" alt="vin2">
    </div>

</section>
<section class="bg-om ">
    <h2 class="vinoteque text-center pt-4 text-light">
        VINOTEQUE
    </h2>
    <p class="text-center mt-3 text-light">
        Strandvejen 28, 4800 Nykøbing Falster
    </p>
    <h2  class="open mt-5 text-center text-light">
        Åbningstider
    </h2>
    <div id="Tid" class="row mx-auto m-w p-3">
        <div class="col-6">
            <ul class="list-unstyled  d-flex flex-column align-items-center text-light days">
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
            <ul class="list-unstyled  d-flex flex-column align-items-center text-light time">
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

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<?php include "includes/footer.php"; ?>
<script src="js/news.js"></script>
</body>
</html>


