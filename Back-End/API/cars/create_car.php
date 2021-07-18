
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../config/Database.php';
include_once '../../models/car.php';

$database = new Database();
$db = $database->connect();

$car = new Car($db);


// utiliser le "php://input" avec la fonction file_get_contents() qui nous aide à recevoir les données JSON sous forme de fichier et à les lire dans une chaîne.
// Plus tard, nous pouvons utiliser la fonction json_decode() pour décoder la chaîne JSON.

$data = json_decode(file_get_contents("php://input"));

$car->brand_id = $data->brand_id;
$car->type_id = $data->type_id;
$car->car_name = $data->car_name;
$car->color = $data->color;
$car->model = $data->model;
$car->description = $data->description;




if ($car->create_Car()) {
    echo json_encode(
        array(

            'msg' => 'New Car  has been inserted successfully.'
        )
    );
} else {
    echo json_encode(
        array(
            'msg' => 'No Car has been created'
        )
    );
}
?>












