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

    <div>
       <div class="titlemodels"> <h3>Nos Modeles</h3></div>

<div class="models">
        <div class="events">
        <img class="img" name="SlideShow" >
        <div class="eventDiscription">
         <h1 class="descriptionHeader">Winter Production</h1>
         <p class="descriptionPar">In the winter trimester, our attention.
                                   The All School Production,
                                   of singing, dancing and acting.
                                   It brings together th and high
                                   school.</p>
        </div>
       </div>

       <div class="events reversed">
           <div class="vid" >
           <img class="imgTwo" name="SlideShowTwo" >
        </div>
        <div class="eventDiscriptionReversed">
         <h1 class="descriptionHeader">International Fair</h1>
         <p class="descriptionPar">Held in November, the International
                                   Fair brings together the formidable
                                   organizational power of our two
                                   Parent Associations.</p>
        </div>
       </div>
       </div>


       <div class="ALL">
       
       <h3>Cherchez ce que vous préférez et calculer </h3>
       <h4>Les Meilleurs Offres sont a vos mains</h4>
       <h4>Tous est possible avec SPEEDLUX</h4>

       <div class="Allrow">

       <div class="btnAll">
        <img src="../assets/next.png">
       <h4>Calculer</h4>
</div>

       <div class="btnAll">
       <div>
        <img src="../assets/next.png">
       <h4>Filtrer</h4>
       </div>

    </div>
    </div>

    <!-- content -->

    <!-- footer  -->
    <?php @include_once('Footer.php'); ?>
    <!-- end footer -->

    <script src="../Js/navbar.js"></script>
    <script src="../Js/produits.js"></script>

    <script>
        AOS.init(); 
    </script>

</body>

</html>