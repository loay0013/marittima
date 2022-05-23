<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/test.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="images/" type="video/mp4">
</video>

<!-- The header content -->
<div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
            <h1 class="display-3">Video Header</h1>
            <p class="lead mb-0">Using HTML5 Video and Bootstrap</p>
        </div>
    </div>
</div>
</header>

<!-- Page section example for content below the video header -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are built into Bootstrap.</p>
                <p>The overlay color and opacity can be changed by modifying the <code>background-color</code> and <code>opacity</code> properties of the <code>.overlay</code> class in the CSS.</p>
                <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
                <p class="mb-0">
                    Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
                </p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
