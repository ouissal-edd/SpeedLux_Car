
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../config/Database.php';
include_once '../../models/type.php';

$database = new Database();
$db = $database->connect();

$type = new Type($db);


// utiliser le "php://input" avec la fonction file_get_contents() qui nous aide à recevoir les données JSON sous forme de fichier et à les lire dans une chaîne.
// Plus tard, nous pouvons utiliser la fonction json_decode() pour décoder la chaîne JSON.

$data = json_decode(file_get_contents("php://input"));

$type->type_label = $data->type_label;
$type->type_description = $data->type_description;



if ($type->create_Type()) {
    echo json_encode(
        array(

            'msg' => 'New Car Type has been inserted successfully.'
        )
    );
} else {
    echo json_encode(
        array(
            'msg' => 'No Type has been created'
        )
    );
}
?>












