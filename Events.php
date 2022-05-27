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

<section class="container events-container pb-3 pt-3 h-auto mx-auto w-auto">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="mt-5 mb-0">Events & Arrangementer</h2>
            <h3 class="mt-2">Båden egne begivenheder</h3>
            <p class="info-text mt-5">På båden Marittima vil der blive afholdt forskellige arrangementer, som kommer til at foregå på bådens nedre dæk. Arrangementerne kan f.eks. være en casino-aften, live musik eller en vinsmagning af nye vin som vi får igennem vinhandlen Marius Mortensen.
			</p>
        </div>
    </div>
</section>


<!--- Wine Tasting --->


<section class="row gx-0 wine-tasting">
    <div class="col-md-6 mb-5 my-md-5">
        <div class="d-flex justify-content-center mt-3"></div>
        <h2 class="text-center mt-5">Vinsmagning</h2>
        <p class="mt-4 p-3 pb-0 mx-md-5 wine-text">
			Vi byder jer velkommen til en exceptionel aften med vores fantastiske vine fra flere forskellige distrikter i hele
			Europa.
			<br><br>
			Sæt et kryds i kalenderen til vores vinsmagning eller lej et lokale til dit team, familie eller venner for
			en mere privat oplevelse, men dog er dette ikke et must.
			Kom med på båden Marittima og nyd en festlig aften med dine nærmeste i smukke omgivelser.
		</p>
    </div>

    <div class="col-md-6">
        <img class="img-fluid w-100" src="images/winetasting.jpg" alt="wine">
    </div>
</section>


<!--- Casino --->

<section class="row gx-0 casino-night">
    <div class="col-md-6 mb-5 order-md-2 my-md-5">
        <h2 class="text-center mt-5">Casino-aften</h2>
        <p class="mt-4 p-3 mx-md-5 wine-text">
			Drømmen om den store gevinst har vi alle.
			Som noget helt nyt, afholder Marittima en casino-aften for alle over 18+.
			<br><br>
			Marittima tilbyder de helt klassiske spil
			såsom Texas Hold'em, Blackjack og Roulette. Nyd en flaske god vin eller supplér med vores fantastiske cocktails i
			kombination med hygge og hazardspil, så sørger vi for at du får en uforglemmelig aften.
        </p>
    </div>

    <div class="col-md-6 order-lg-1">
        <img class="img-fluid w-100 h-auto" src="images/Casino.jpg" alt="vin2">
    </div>
</section>


<!--- Live-Musik --->

<section class="row gx-0 live-music">
    <div class="col-md-6 mb-5 my-md-5">
        <div class="d-flex justify-content-center mt-3"></div>
        <h2 class="text-center mt-5">Live-musik</h2>
        <p class="mt-3 p-3 mx-md-5 wine-text">
			Har du lyst til en mere rolig aften med venner og familie? Så kom ombord og nyd musikken.
			<br><br>
			Vi afholder flere
			forskellige aftener med dygtige musikere, der brænder for at give dig en aften med gode vibes. Vi sørger for at du
			selvfølgelig får det bedste serveret hertil. Så tag dine venner eller veninder under armen og kom ombord på
			Marittima, og lad musikken og fællesskabet blive en del af en herlig aften.
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