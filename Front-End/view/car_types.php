<?php @include_once('HeaderDash.php'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h6 id="titleBrand" class="m-0 font-weight-bold text-primary">Type Voiture</h6>
    </div>
    <div class="card-body">


        <button class="btn btn-success btn-sm" id="button_ADD_Type" style="margin-bottom: 30px; margin-top:20px" type="button" data-toggle="modal" data-target="#add_new_Type" data-placement="top">
            <i class="fa fa-plus"></i>
            Ajouter Nouveau Type
        </button>
        <table class="table">

        </table>
    </div>

    <!-- Add New Type Modal -->

    <div class="modal fade" id="add_new_Type" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un Nouveau Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="ADD_Type">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="type_label">Type</label>
                            <input type="text" id="type_label_input" class="form-control" placeholder="Nom type" name="type_label">

                        </div>
                        <div class="form-group">
                            <label class="descrip_label" for="type_label">Description </label>
                            <input type="text" id="type_description_input" placeholder="Description" class="form-control" name="type_description">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnADDType" class="btn btn-info">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- END Modal FOR ADDING NEW TYPE -->




    <!-- END -->

    <script>
        if (sessionStorage.getItem('role') !== "admin") {
            document.location.href = "../view/Connect.php"
        }
    </script>
    <!-- JS -->
    <script src="../Js/car_Type.js"></script>
    <?php @include_once('FooterDash.php'); ?>