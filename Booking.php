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

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/Kalender.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="h-100">




<?php include "includes/nav.php";?>


<header id="hero" class="container-fluid">
    <div class="overlay"></div>

    <div class="row">
        <div class="col-12 text-light text-center">
            <h1>Booking</h1>
            <p class="g-2">Book dit næste arrangement.</p>
        </div>
    </div>

    <div class="icon position-absolute bottom-0 text-center w-100 text-light">
        <i class="fa-solid fa-chevron-down fa-2x p-4"></i>
    </div>
</header>

<div class="container">
	<div class="calendar">
		<div class="month">
			<i class="fas fa-angle-left prev"></i>
			<div class="date">
				<h1 class="calendar-text"></h1>
				<p></p>
			</div>
			<i class="fas fa-angle-right next"></i>
		</div>
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


<script src="js/calendar.js"></script>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const date = new Date();

    const renderCalendar = () => {
        date.setDate(1);

        const monthDays = document.querySelector(".days");

        const lastDay = new Date(
            date.getFullYear(),
            date.getMonth() + 1,
            0
        ).getDate();

        const prevLastDay = new Date(
            date.getFullYear(),
            date.getMonth(),
            0
        ).getDate();

        const firstDayIndex = date.getDay();

        const lastDayIndex = new Date(
            date.getFullYear(),
            date.getMonth() + 1,
            0
        ).getDay();

        const nextDays = 7 - lastDayIndex - 1;

        const months = [
            "Januar",
            "Februar",
            "Marts",
            "April",
            "Maj",
            "Juni",
            "Juli",
            "August",
            "September",
            "Oktober",
            "November",
            "December",
        ];

        document.querySelector(".date h1").innerHTML = months[date.getMonth()];

        document.querySelector(".date p").innerHTML = new Date().toDateString();

        let days = "";

        for (let x = firstDayIndex; x > 0; x--) {
            days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
        }

        for (let i = 1; i <= lastDay; i++) {
            if (
                i === new Date().getDate() &&
                date.getMonth() === new Date().getMonth()
            ) {
                days += `<div class="today">${i}</div>`;
            } else {
                days += `<div>${i}</div>`;
            }
        }

        for (let j = 1; j <= nextDays; j++) {
            days += `<div class="next-date">${j}</div>`;
            monthDays.innerHTML = days;
        }
    };

    document.querySelector(".prev").addEventListener("click", () => {
        date.setMonth(date.getMonth() - 1);
        renderCalendar();
    });

    document.querySelector(".next").addEventListener("click", () => {
        date.setMonth(date.getMonth() + 1);
        renderCalendar();
    });

    renderCalendar();
</script>


<?php include "includes/footer.php";?>
<script src="js/news.js"></script>




</body>
</html>