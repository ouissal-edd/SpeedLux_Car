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
        <h1 data-aos="fade-right" >Pour Plus D'Informatons N'esitez </h1>
        <h1 data-aos="fade-right" >pas a nous envoyez vos Message .</h1>

        <h5 data-aos="fade-right" >réserver maintenant avec de bon prix et haute qualités , des prix qui débute par 70$
        </h5>  
        <button data-aos="fade-right" >Réserver Maintenant !</button>
        <div class="bas"> <a href="#tec"> <img src="../assets/bas.png" alt=""> </a></div>
        <h5>envoyez Maintenant! </h5>
    </div>
<!-- content -->
<h2 data-aos="fade-right" class="titleOne">Contact</h2>
<div  data-aos="fade-right" class="container">
  <form action="action_page.php">

    <label >Email</label>
    <input type="text"   placeholder="Entrez votre email.">

    <label >Sujet</label>
    <input type="text"  placeholder="Sujet.">

    <label>Message</label>
    <textarea  placeholder="SpeedLux....." style="height:200px"></textarea>
<input type="submit" value="Envoyez">
  </form>
</div>

<div id="map">
    <img src="../assets/mapp.jpg">
</div>

    <!-- Footer -->
    <?php @include_once('Footer.php'); ?>

        <!-- Footer -->
        <!-- <script>
            function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 31.506327,
            lng: -​9.754354
        },
        zoom: 8
    });
}
        </script> 
        <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhUz7hjwBesJrjnJv6Xepb-tz_KYh98wA&callback=initMap&libraries=&v=weekly"
      async defer
    ></script> -->
    <script>
        AOS.init(); 
    </script>

</body>
</html>