<?php @include_once('HeaderDash.php'); ?>


<div class="container-fluid">

    <!-- Cart for Statistiques -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total utilisateurs
                            </div>
                            <!-- here id for showing the count users -->
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="MyClients"> </div>
                            <!-- here is id for showing the count users -->

                        </div>
                        <div class="col-auto">
                            <i class="bs bs-boy fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Car Brands
                            </div>
                            <!-- here id for showing the count Brands -->
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="MyBrands"> </div>
                            <!-- here is the end -->

                        </div>
                        <div class="col-auto">
                            <i class="bs bs-scissors-1 fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Cars
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <!-- here id for showing the count Cars -->
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="MyCars"> </div>
                                    <!-- Ennd count Cars -->
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bs bs-man fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Reservations
                            </div>
                            <!-- here id for showing the count Reservation -->
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="MyReservation"></div>
                            <!-- End for Count Reservation-->

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Staart Showing the Table For Reservations -->
    <table class="table">

    </table>
    <!-- End Table For Read reservationq -->


    <!-- JS -->
    <script src="../Js/Dashboard.js"></script>

    <?php @include_once('FooterDash.php'); ?>