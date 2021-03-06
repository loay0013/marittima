<!DOCTYPE html>
<html class="h-100" lang="da">
<head>
    <meta charset="utf-8">

    <title>Marittima | Find os nemt her på siden</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Er du i tvivl om vores lokation, så find os super nemt på denne side. Her er vores
    kontaktoplysninger og en maps guide til hvordan du netop finder den hurtigste vej til båden Marittima.">
	<meta name="keywords" content="Find os, Kontakt, Lokation, Maps, Marittima, Guide">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/zmy5mob.css">


    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="h-100">

<!--navbar-->
<?php include "includes/nav.php";?>
<!--header-->
<header id="hero7" class="container-fluid">
    <div class="overlay"></div>
    <!--text til header-->
    <div class="row">
        <div class="col-12 hero-text text-light text-center">
            <h1>Find os</h1>
            <p class="g-2">Find os nemt her på siden.</p>
        </div>
    </div>
    <!-- icon-->
    <div class="icon position-absolute bottom-0 text-center w-100 text-light">
       <a id="#Adresse" class="text-light"> <i class="fa-solid fa-chevron-down fa-2x p-4"></i></a>
    </div>
</header>

<!--text-->
<section class="row m-0 pt-5">
	<div class="p-3 col-md-4">
		<h2 id="Adresse" class="text-center">
			Adresse
		</h2>
		<p class="text-center p-3">
			Sandgade
			<br>
			4800 Nykøbing Falster
		</p>
	</div>
    <div class="p-3 col-md-4">
    <h2 class="text-center">
        Hvor er vi?
    </h2>
        <p class="text-center p-3">
            Find hurtigt ud af hvor
            vi befinder os.
        </p>
    </div>
	<div class="p-3 col-md-4">
		<h2 class="text-center">
			Rutevejledning
		</h2>
        <!--knap-->
		<div class="d-flex justify-content-center p-3">
			<a href="https://goo.gl/maps/yxyHgbNWRJra5FMS9" class="btn-btn1 border-0 text-light p-2 px-2 py-2 text-center  w-50 link-light text-decoration-none ">MAPS</a></div>
	</div>

</section>


<!--google map-->
<div class="d-flex justify-content-center mb-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.547567335376!2d11.860275216060904!3d54.77034107479649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad30f97b0d187f%3A0x9d45111e91fc8619!2sSandgade%2C%204800%20Nyk%C3%B8bing%20Falster!5e0!3m2!1sda!2sdk!4v1653562436044!5m2!1sda!2sdk" width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!--footer-->
<?php include "includes/footer.php";?>
<!--bootstrap script-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Nyhedsbrev script-->
<script src="js/news.js"></script>
</body>
</html>
