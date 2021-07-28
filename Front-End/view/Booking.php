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

    <div id="countainer">
        <div class="ImgBook">
            <img src="../assets/res.png" alt="#">
        </div>

        <div class="InputBooking">

            <input type="text" placeholder="Local de check" name="pickup_location">
            <input type="text" placeholder="local de retour" name="return_location">
            <input type="date" name="pickup_date">
            <input type="date" name="return_date">
            <button onclick="heroTwoBlock()" type="submit">Effectuer votre reservation</button>
        </div>
    </div>

    <!-- Section Suite reservation -->


    <div id="heroTwo">
        <div class="AllCard">
            <div class="card">

                <div class="calen"> <img src="../assets/calendar.png" alt=""></div>
                <h4><b>Date de Check :</b></h4>

            </div>

            <div class="card">

                <div class="calen"> <img src="../assets/calendar.png" alt=""></div>
                <h4><b>Date de Check :</b></h4>

            </div>

            <div class="card">

                <div class="calen"> <img src="../assets/location.png" alt=""></div>
                <h4><b>Date de Check :</b></h4>

            </div>

            <div class="card">

                <div class="calen"> <img src="../assets/location.png" alt=""></div>
                <h4><b>Date de Check :</b></h4>

            </div>
        </div>

        <div id="verificationCar">

            <div id="CarAvail">

            </div>

        </div>

        <!-- END SECTION -->

        <!-- content -->

        <!-- footer  -->
        <!-- end footer -->
        <script>
            if (sessionStorage.getItem('role') == null) {
                document.location.href = "../view/Connect.php"
            }
        </script>

        <script src="../Js/Booking.js"></script>
        <script src="../Js/navbar.js"></script>


</body>

</html>