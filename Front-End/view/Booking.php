<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/Booking.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    <!-- Header -->
    <?php @include_once('Header.php'); ?>
    <!-- Header -->

    <!-- content -->
    <div class="hero">
        <h1 data-aos="fade-right">Reserver votre voiture</h1>
    </div>
    <h4>Trouver la voiture qui vous correspand</h4>
    <div id="alertt">
        <div class="alert">
            <span class="far fa-grin-beam"></span>
            <span id='msgg' class="msg">Votre resevation a été creer avec succes</span>
            <span onclick="none_alert()" class="close-btn">
                <span class="fas fa-times"></span>
            </span>
        </div>
    </div>

    <div id="countainer">
        <div class="ImgBook">
            <div id="countainer_Select">
                <h3>Selectionner votre voiture</h3>
            </div>
        </div>

        <div class="InputBooking">

            <input type="text" id="pickup_location" placeholder="Local de check" name="pickup_location" require pattern="[A-Za-z]" maxlength="10">
            <input type="text" id="return_location" placeholder="local de retour" name="return_location" require pattern="[A-Za-z]" maxlength="10">
            <input type="date" id="pickup_date" name="pickup_date" require>
            <input type="date" id="return_date" name="return_date" require>
            <button onclick="create_reservation()" type="submit">Effectuer votre reservation</button>
        </div>
    </div>


    <!-- Section Suite reservation -->










    <!-- END SECTION -->

    <!-- content -->

    <!-- footer  -->

    <div id="footer">
        <p><span>Copyright &copy; SPEEDLUX Website by ED-DOUJ Ouissal 2021</span></p>
    </div>
    <!-- end footer -->
    <script>
        if (sessionStorage.getItem('role') == null) {
            document.location.href = "../view/Connect.php"
        }
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../Js/Booking.js"></script>
    <script src="../Js/navbar.js"></script>


</body>

</html>