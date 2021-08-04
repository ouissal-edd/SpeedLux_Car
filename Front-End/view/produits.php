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
        <h1 data-aos="fade-right">Découvrir Le type de voiture </h1>
        <h1>que vous voulez</h1>
        <div class="btn">
            <button data-aos="fade-right">Trouver Voiture</button>
            <button data-aos="fade-right">Calculez estimation</button>
        </div>
    </div>

    <div>
        <div class="titlemodels">
            <h3>Nos Modeles</h3>
        </div>

        <div class="models">
            <div class="events">
                <img class="img" name="SlideShow">
                <div class="eventDiscription">
                    <h1 class="descriptionHeader">Winter Production</h1>
                    <p class="descriptionPar">In the winter trimester, our attention.
                        The All School Production,
                        of singing, dancing and acting.
                        It brings together th and high
                        school.</p>
                </div>
            </div>
        </div>


        <div class="DivDescriptif">

            <h3>Cherchez ce que vous préférez et calculer </h3>
            <h4>Les Meilleurs Offres sont a vos mains</h4>
            <h5>Tous est possible avec SPEEDLUX</h5>
            <div class="Choix">
                <div class="ChoixBoutton">
                    <div class="btnChoix">
                        <img src="../assets/next">
                    </div>
                    <h3>Calculer</h3>
                </div>

                <div class="ChoixBoutton">
                    <div class="btnChoix">
                        <img src="../assets/next">
                    </div>
                    <h3>Filtrer</h3>
                </div>
            </div>

        </div>


        <div class="c-product-tray">

            <div class="o-wrapper">

                <h2 class="c-product-tray__heading">Our Products</h2>

                <div class="c-product-tray__carousel">

                    <div class="o-slider-product-tray">

                        <div class="o-slider-product-tray__controls js-controls">

                            <button class="o-slider-product-tray__button o-slider-product-tray__button--prev">
                                <svg class="o-slider-product-tray__arrow o-slider-product-tray__arrow--prev" xmlns="http://www.w3.org/2000/svg" viewBox="-44 40.7 11 21.1">
                                    <path d="M-33.5 61.8L-44 51.3l10.5-10.6.5.5-10.1 10.1 10.1 10z" />
                                </svg>
                            </button>

                            <button class="o-slider-product-tray__button o-slider-product-tray__button--next">
                                <svg class="o-slider-product-tray__arrow o-slider-product-tray__arrow--next" xmlns="http://www.w3.org/2000/svg" viewBox="-44 40.7 11 21.1">
                                    <path d="M-33.5 61.8L-44 51.3l10.5-10.6.5.5-10.1 10.1 10.1 10z" />
                                </svg>
                            </button>

                        </div>


                        <ul class="o-slider-product-tray__inner js-slider-product-tray">


                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- content -->

        <!-- footer  -->
        <?php @include_once('Footer.php'); ?>
        <!-- end footer -->

        <!-- <script src="../Js/navbar.js"></script> -->
        <script src="../Js/produits.js"></script>

        <script>
            AOS.init();
        </script>

</body>

</html>