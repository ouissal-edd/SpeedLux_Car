<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/car.php';

$database = new Database();
$db = $database->connect();

$car = new Car($db);

$data = json_decode(file_get_contents("php://input"));

$car->id = $data->id;

if ($car->delete_Car()) {
    echo json_encode(
        array('message' => 'Car deleted')
    );
} else {
    echo json_encode(
        array('message' => 'Car not deleted')
    );
}
