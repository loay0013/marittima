<!DOCTYPE html>
<html class="h-100" lang="da">
<head>
    <meta charset="utf-8">

    <title> Marittima | Book din næste aften hos os</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Book en tid og sæt kryds i kalenderen til en uforglemmelig aften på båden Marittima. Vi
    brænder for at give dig den bedste oplevelse.">
	<meta name="keywords" content="Book, Tid, Kalender, Båden, Oplevelse, Marittima">

    <link rel='icon' href='images/logosortudenslogan%20.svg' type='image/x-icon' sizes="40x40" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Kalender.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/zmy5mob.css">



    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="h-100">



<!--navbar-->
<?php include "includes/nav.php";?>

<!--header-->
<header id="hero" class="container-fluid">
    <div class="overlay"></div>
    <!--text til header-->
    <div class="row">
        <div class="col-12 hero-text text-light text-center">
            <h1>Booking</h1>
            <p class="g-2">Book dit næste arrangement.</p>
        </div>
    </div>
    <!-- icon-->
    <div class="icon position-absolute bottom-0 text-center w-100 text-light">
        <i class="fa-solid fa-chevron-down fa-2x p-3"></i>
    </div>
</header>
<!--calendar-->
<div class="container">
	<div class="calendar">
		<div class="month">
            <div class="prev p-5"><i class="fas fa-angle-left"></i></div>
            <!--text calendar-->
			<div class="date">
				<h1 class="calendar-text"></h1>
				<p></p>
			</div>

            <div class="next p-5"><i class="fas fa-angle-right next"></i></div>
		</div>
        <!--dag calendar-->
		<div class="weekdays">
			<div>Søn</div>
			<div>Man</div>
			<div>Tirs</div>
			<div>Ons</div>
			<div>Tors</div>
			<div>Fre</div>
			<div>Lør</div>
		</div>
		<div class="days"></div>
	</div>
</div>
<!--footer-->
<?php include "includes/footer.php";?>
<!--bootstrap script-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--calendar script-->
<script src="js/calendar.js"></script>
<!--Nyhedsbrev script-->
<script src="js/news.js"></script>
</body>
</html>