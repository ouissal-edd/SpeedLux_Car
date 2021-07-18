<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style\contact.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- Header -->
    <?php @include_once('Header.php'); ?>
    <!-- Header -->


    <!-- content -->
    <div class="hero">
        <h1 data-aos="fade-right">Pour Plus D'Informatons N'esitez </h1>
        <h1 data-aos="fade-right">pas a nous envoyez vos Message .</h1>

        <h5 data-aos="fade-right">réserver maintenant avec de bon prix et haute qualités , des prix qui débute par 70$
        </h5>
        <button data-aos="fade-right">Réserver Maintenant !</button>
        <div class="bas"> <a href="#tec"> <img src="../assets/bas.png" alt=""> </a></div>
        <h5 class="fornon">envoyez Maintenant! </h5>
    </div>
    <!-- content -->
    <h2 data-aos="fade-right" class="titleOne">Contact</h2>
    <div id="tec" data-aos="fade-right" class="container">
        <form action="">

            <label>Email</label>
            <input type="text" placeholder="Entrez votre email.">

            <label>Sujet</label>
            <input type="text" placeholder="Sujet.">

            <label>Message</label>
            <textarea placeholder="SpeedLux....." style="height:200px"></textarea>
            <input type="submit" value="Envoyez">
        </form>
    </div>

    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.18230094664!2d-9.271712303364565!3d32.2930725167809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi!5e0!3m2!1sfr!2sma!4v1625853845574!5m2!1sfr!2sma" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <?php @include_once('Footer.php'); ?>


    <!-- Footer -->
    <script src="../JS/Header.js"> </script>
    <script src="../JS/contact.js"> </script>
    < <script>
        AOS.init();
        </script>

</body>

</html>