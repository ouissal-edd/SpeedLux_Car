<?php @include_once('HeaderDash.php'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h6 id="titleBrand" class="m-0 font-weight-bold text-primary"> Voitures</h6>
    </div>
    <div class="card-body">


        <button onclick="add()" class="btn btn-success btn-sm" id="button_ADD_Type" style="margin-bottom: 30px; margin-top:20px" type="button" data-toggle="modal" data-target="#add_new_Cars" data-placement="top">
            <i class="fa fa-plus"></i>
            Ajouter une voiture
        </button>
        <table class="table">

        </table>
    </div>

    <!-- Add New Brand Modal -->

    <div class="modal fade" id="add_new_Cars" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter Voiture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="ADD_Car">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="brand_name">Marque</label>
                            <select name="car_brand" id="Select_brand" class="custom-select">
                            </select>
                            <input id="id_car" type="hidden" name="id_car">
                            <label for="type_label">Type</label>
                            <select name="car_types" id="Select_type" class="custom-select">
                            </select>

                            <label for="car_name">Nom voiture</label>
                            <input type="text" id="car_name" class="form-control" placeholder="Nom voiture" name="car_name">

                            <label for="color">Couleur</label>
                            <input type="text" id="color" class="form-control" placeholder="Couleur voiture" name="color">

                            <label for="model">Model</label>
                            <input type="text" id="model" class="form-control" placeholder="Modele voiture" name="model">

                            <label for="description">Description</label>
                            <input type="text" id="description" class="form-control" placeholder="Description" name="description">

                            <div id="For_ADD" class="modal-footer">
                                <button type="submit" style="width:100%" id="submit" class="btn btn-info">Ajouter</button>
                            </div>

                            <div id="For_Edit" class="modal-footer">
                                <button onclick="Edit_car()" style="width:100%" type="submit" id="Edit_submit" class="btn btn-dark">Editer</button>
                            </div>



                        </div>
                    </div>
                </form>

            </div>
        </div>














        <!-- JS -->

        <script>
            if (sessionStorage.getItem('role') !== "admin") {
                document.location.href = "../view/Connect.php"
            }
        </script>

        <script src="../Js/Cars.js"></script>
        <?php @include_once('FooterDash.php'); ?>