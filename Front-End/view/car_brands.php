<?php @include_once('HeaderDash.php'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h6 id="titleBrand" class="m-0 font-weight-bold text-primary">Car Brands</h6>
    </div>
    <div class="card-body">


        <button class="btn btn-success btn-sm" id="button_ADD_Brand" style="margin-bottom: 30px; margin-top:20px" type="button" data-toggle="modal" data-target="#add_new_brand" data-placement="top">
            <i class="fa fa-plus"></i>
            Ajouter Nouvelle Marque
        </button>
        <table class="table">

        </table>
    </div>

    <!-- Add New Brand Modal -->

    <div class="modal fade" id="add_new_brand" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter une nouvelle marque</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="brand_name">Nom de marque</label>
                            <input type="text" id="brand_name_input" class="form-control" placeholder="Marque" name="brand_name">

                        </div>
                        <div class="form-group">
                            <label class="labelBrands" for="brand_image">Image </label>
                            <input type="file" id="brand_image_input" class="form-control" name="brand_image">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnADDbrand" class="btn btn-info" name="add_brand_sbmt">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <!-- Delete Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-toggle="modal" data-target="#Delete__brand">
        <div class="modal-dialog" role="document">
            <form>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supression de marque</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Vous etes sur de vouloir supprimer?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="delete_brand_sbmt" class="btn btn-danger">Supprimer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- END Modal FOR ADDING NEW BRANDS -->
    <!-- JS -->
    <script src="../Js/car_brands.js"></script>
    <?php @include_once('FooterDash.php'); ?>