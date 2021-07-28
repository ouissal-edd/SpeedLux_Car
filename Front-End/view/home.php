<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/Home.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="../style/Header.php">
</head>

<body>
    <!-- include Header -->
    <?php @include_once('Header.php'); ?>
    <!-- include Header -->

    <!-- content -->
    <div class="hero">
        <h1 data-aos="fade-right">Voudriez des Voiture de Lux?</h1>
        <h1 data-aos="fade-right">On Vous Offres le Meilleurs Avec un Simple CLICK!.</h1>
        <h5 data-aos="fade-right">réserver maintenant avec de bon prix et haute qualités , des prix qui débute par 70$
        </h5>
        <button onclick="Appel_Section_reservation()" data-aos="fade-right"> <a style="text-decoration:none; color:white;" href="Booking.php"> Réserver Maintenant ! </a></button>

    </div>

    <!-- content -->

    <!-- footer  -->
    <?php @include_once('Footer.php'); ?>
    <!-- end footer -->
    <script src="../Js/navbar.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>