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
    <link href="css/Mikkelsstyles.css" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="h-100">

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php include "includes/nav.php";?>

<header id="hero" class="container-fluid">
    <div class="overlay"></div>

    <div class="row">
        <div class="col-12 hero-text text-light text-center">
            <h1>Events</h1>
            <p class="g-2">Få en ekstraodinær aften og deltag i sjove events på båden Marittima.</p>
        </div>
    </div>
</header>

<div class="container events-container pb-3 pt-3 h-auto mx-auto w-auto">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="mt-5 mb-0">Events & Arrangementer</h2>
            <h3 class="mt-2">Båden egne begivenheder</h3>
            <p class="info-text mt-5">På båden Marittima vil der blive afholdt forskellige arrangementer, som kommer til at foregå på bådens nedre dæk. Arrangementerne kan f.eks. være en casino-aften, live musik eller en vinsmagning af nye vin som vi får igennem vinhandlen Marius Mortensen
			</p>
        </div>
    </div>
</div>


<!--- Wine Tasting --->


<section class="row gx-0 wine-tasting">
    <div class="col-md-6">
        <div class="d-flex justify-content-center mt-3"></div>
        <h2 class="text-center mt-5">Vinsmagning</h2>
        <p class="mt-4 p-3 pb-0 mx-5 wine-text">
			Vi byder jer velkommen om bord fredag den 15. juli kl. 17:00 til en hyggelig vinsmagning på Vinoteque Marittima.
			Vinsmagningen vil bestå af 8 vine specielt udvalgt af vinhandlen Marius Mortensen.
			Skriv gerne til os hvis i er interesseret på mail: vinoteque-m@rius.dk
		</p>
    </div>

    <div class="col-md-6">
        <img class="img-fluid w-100" src="images/winetasting.jpg" alt="wine">
    </div>
</section>


<!--- Casino --->

<section class="row gx-0 casino-night">
    <div class="col-md-6 order-md-2">
        <h2 class="text-center mt-5">Private Arrangementer</h2>
        <p class="mt-4 p-3 wine-text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua.
            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
            est Lorem ipsum dolor sit amet. <br><br><br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            At vero eos et accusam et justo duo dolores et ea
            lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aspernatur autem blanditiis commodi, deleniti dignissimos dolorum hic illo ipsum molestiae.
        </p>
    </div>

    <div class="col-md-6 order-lg-1 ">
        <img class="img-fluid w-100 h-auto" src="images/Casino.jpg" alt="vin2">
    </div>
</section>


<!--- Live-Musik --->

<section class="row gx-0 live-music">
    <div class="col-md-6">
        <div class="d-flex justify-content-center mt-3"></div>
        <h2 class="text-center mt-5">Live-musik</h2>
        <p class="mt-3 p-3 wine-text">
            Hos Marittima ønsker vi at skabe en god oplevelse for hele familien.
            Marittima blev skabt ud fra drømmen om en vinbar. Historien bag Marius Mortensen går hånd i hånd med Skibet
            Marittima, og fører den næste generations historie videre.<br><br><br>
            Folk der har været på skibet vil være i stand til at kunne fortælle om historier om dengang de holdt fest på
            bølgen blå, med den synlige solnedgang ud af vinduet, lige før den når halvvejs under horisonten.

        </p>
    </div>

    <div class="col-md-6">
        <img class="img-fluid h-100 w-100" src="images/Music.jpg" alt="vin">
    </div>
</section>


<!--- Footer Section --->

<?php include "includes/footer.php"; ?>


<script src="js/news.js"></script>
</body>
</html>