<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/services.css">
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
        <h1 data-aos="fade-right" >Découvrez Nos Services et Profiter des Nouvelles Offres</h1>
        <h5 data-aos="fade-right" >réserver maintenant avec de bon prix et haute qualités , des prix qui débute par 70$
        </h5>  
        <button data-aos="fade-right" >Réserver Maintenant !</button>
        <div class="bas"> <a href="#tec"> <img src="../assets/bas.png" alt=""> </a></div>
        <h5>Decouvrez Maintenant! </h5>
    </div>


    <div id="tec" class="ParentsServices">
        <h2>Nos Services</h2>
    <!-- <div class="Allserv"> -->
        <div  class="iconService">
            <div  id="nondiv" data-aos="fade-up" class="iconn noneInresonsive"> <img src="../assets/service24.png" alt=""><h3 data-aos="fade-up">Service</h3><p data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, sit. Maiores est odit ullam nesciunt enim asperiores sunt dolore magnam debitis, id laboriosam error aliquam excepturi accusantium velit. Sunt, et!</p>
           </div>
            <div data-aos="fade-up" class="iconn" > <img src="../assets/settings.png" alt=""> <h3 data-aos="fade-up">Service</h3><p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a deserunt ratione, praesentium, mollitia amet reprehenderit eius corrupti architecto eveniet, repellendus dignissimos veritatis iste culpa voluptatem. Fugit nobis cum non.</p>
 </div>
            <div data-aos="fade-up" class="iconn"> <img src="../assets/carburant.png" alt=""><h3 data-aos="fade-up">Service</h3> <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a deserunt ratione, praesentium, mollitia amet reprehenderit eius corrupti architecto eveniet, repellendus dignissimos veritatis iste culpa voluptatem. Fugit nobis cum non.</p>
 </div>
        </div>
    </div>

  <div  class="SlidService">
  <div class="servWork">
      <h3 data-aos="fade-up">Decouvrez Notre Travaille</h3>
      <h3 data-aos="fade-up">On ne rejoignons </h3>
  </div>
  <div data-aos="fade-up" class="workroute">
    <div class="iimmg">  <img src="../assets/route.png" alt=""></div>
      <h3 data-aos="fade-up">Rue tachifin Num 15</h3>
  </div>
  </div>

  <div data-aos="fade-up" class="QualityService">
      <h2>Plus de service ?</h2>

      <div class="regroupRow">
      <div class="Descrip">

          <div class="OnoDescp">
  <div class="widthPhoto"> <img src="../assets/bonprix.png" alt=""></div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod iste, id dolorum nesciunt quo illo omnis perspiciatis voluptates eveniet rem temporibus, quidem animi. Nemo neque nulla maxime magni, error saepe.</p>
          </div>


          <div class="OnoDescp">
             <div class="widthPhoto"> <img src="../assets/qualité.png" alt=""></div>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum assumenda necessitatibus excepturi quam modi veritatis inventore vitae amet quaerat nesciunt voluptate natus consequuntur repellendus iure vero, in facilis perferendis. Impedit.</p>
          </div>


      </div>

<div  data-aos="zoom-in" class="PhotoService">
    <img src="../assets/MaphoService.png" alt="">
</div>
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