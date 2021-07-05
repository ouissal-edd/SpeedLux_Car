<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/produits.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
<!-- include Header -->
<?php @include_once('Header.php'); ?>
<!-- include Header -->

    <!-- content -->
    <div class="hero">
        <h1 data-aos="fade-right" >Découvrir Le type de voiture </h1>
        <h1>que vous voulez</h1>
        <div class="btn">
        <button data-aos="fade-right" >Trouver Voiture</button>
        <button data-aos="fade-right" >Calculez estimation</button>
        </div>
    </div>

    <!-- content -->

    <!-- footer  -->
    <?php @include_once('Footer.php'); ?>
    <!-- end footer -->

    <script src="../Js/navbar.js"></script>
    <script src="../Js/service.js"></script>

    <script>
        AOS.init(); 
    </script>

</body>

</html>