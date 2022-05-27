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


<section class="kontakt_os">
	<h1 class="title-contact fs-3">Kontakt os</h1>
	<div class="container-contact">
		<div class="contact-form-kontakt row">
			<div class="form-field-kontakt col-lg-6">
				<input id="name" class="input-text-kontakt" type="text" name="">
				<label for="name" class="label-kontakt">navn</label>
			</div>
			<div class="form-field-kontakt col-lg-6">
				<input id="email" class="input-text-kontakt" type="email" name="">
				<label for="email" class="label-kontakt">email</label>
			</div>
			<div class="form-field-kontakt col-lg-12">
				<input id="message" class="input-text-kontakt" type="text" name="">
				<label for="message" class="label-kontakt">besked</label>
			</div>
			<div class="form-field-kontakt col-lg-12 d-flex">
				<input class="submit-btn bg-btn1" type="submit" value="send" name="Send">
			</div>
		</div>
	</div>
</section>





<?php include "includes/footer.php";?>
<script src="js/news.js"></script>
</body>
</html>
