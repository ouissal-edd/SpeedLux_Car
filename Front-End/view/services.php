<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/services.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!-- include Header -->
    <?php @include_once('Header.php'); ?>
    <!-- include Header -->

    <!-- content -->
    <div class="hero">
        <h1 data-aos="fade-right">Découvrez Nos Services et Profiter des Nouvelles Offres</h1>
        <h5 data-aos="fade-right">réserver maintenant avec de bon prix et haute qualités , des prix qui débute par 70$
        </h5>
        <button data-aos="fade-right"> <a style="text-decoration:none; color:white;" href="Booking.php"> Réserver Maintenant ! </a></button>
        <div class="bas"> <a href="#tec"> <img src="../assets/bas.png" alt=""> </a></div>
    </div>


    <div id="tec" class="ParentsServices">
        <h2>Nos Services</h2>
        <h3>Luxury Speed Car</h3>

        <!-- <div class="Allserv"> -->
        <div class="iconService">
            <div id="nondiv" data-aos="fade-up" class="iconn noneInresonsive"> <img src="../assets/service24.png" alt="">
                <h3 data-aos="fade-up">Disponibilité 24/24</h3>
                <p data-aos="fade-up">Commercial avant tout, l’agent est à l’écoute des besoins des clients afin de leur proposer un service adapté. Il les conseille notamment dans leurs choix de véhicule et les aide à remplir le contrat de location.</p>
            </div>
            <div data-aos="fade-up" class="iconn"> <img src="../assets/settings.png" alt="">
                <h3 data-aos="fade-up">Maintenance</h3>
                <p data-aos="fade-up">Réceptionne le véhicule, l’examine pour vérifier son état. En cas d’incident non prévu dans le contrat, de réclamation client, de retour de véhicule non conforme ou retard, il se charge de régler le problème.</p>
            </div>
            <div data-aos="fade-up" class="iconn"> <img src="../assets/carburant.png" alt="">
                <h3 data-aos="fade-up">Carburant</h3>
                <p data-aos="fade-up">Si vous rendez le véhicule avec le plein, vous n’avez aucun frais à payer même si vous avez pris l’option carburant lors de la signature du contrat de location de voiture. N'oubliez pas de en profiter.
                </p>
            </div>
        </div>
    </div>

    <div class="SlidService">
        <div class="servWork">
            <h3 data-aos="fade-up">Decouvrez Notre Travaille</h3>
            <h3 data-aos="fade-up">On ne rejoignons </h3>
        </div>
        <div data-aos="fade-up" class="workroute">
            <div class="iimmg"> <img src="../assets/route.png" alt=""></div>
            <h3 data-aos="fade-up">Rue tachifin Num 15</h3>
        </div>
    </div>

    <div data-aos="fade-up" class="QualityService">
        <h2>Plus de service ?</h2>
        <h3>Luxury Speed Car</h3>


        <div class="regroupRow">
            <div class="Descrip">

                <div class="OnoDescp">
                    <div class="widthPhoto"> <img src="../assets/bonprix.png" alt=""></div>
                    <p>Un design robuste, une calandre chromée, des optiques avec signature lumineuse Dacia, Logan a tout pour plaire au meilleur prix.</p>
                </div>


                <div class="OnoDescp">
                    <div class="widthPhoto"> <img src="../assets/qualité.png" alt=""></div>
                    <p>Le développement de process de production flexible et économe en ressources l’optimisation des process pour la production en série à prix compétitifs.</p>
                </div>


            </div>

            <div data-aos="zoom-in" class="PhotoService">
                <img src="../assets/MaphoService.png" alt="">
            </div>
        </div>
    </div>


    <!-- part of product  -->
    <div class="title_product">
        <h2>NOS PRODUIT </h2>
        <h3>Luxury Speed Car</h3>
        <p>Du confort pour tous les passagers grâce aux commandes de lève-vitres électriques avant et arrière. Le conducteur règle sa vitre en toute simplicité avec le mode impulsionnel.
        </p>
    </div>


    <div class="content">
        <div class="banner">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div id="Our_product" class="swiper-wrapper">
                    <!-- Slides -->

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>





        </div>

    </div>

    </div>
    <!-- end part product  -->
    <!-- content -->

    <!-- footer  -->
    <?php @include_once('Footer.php'); ?>
    <!-- end footer -->

    <script src="../Js/navbar.js"></script>
    <script src="../Js/product.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>

    <script>
        const swiper = new Swiper('.swiper-container', {
            // Optional parameters
            loop: true,
            slidesPerView: 4,
            slidesPerGroup: 2,
            spaceBetween: 20,
            speed: 2000,



            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
        AOS.init();
    </script>

</body>

</html>