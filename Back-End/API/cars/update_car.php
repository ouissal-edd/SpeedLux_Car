<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/car.php';

$database = new Database();
$db = $database->connect();

$car = new Car($db);

$data = json_decode(file_get_contents("php://input"));

$car->id = $data->id;
$car->type_id = $data->type_id;
// $car->brand_id = $data->brand_id;
$car->car_name = $data->car_name;
$car->color = $data->color;
$car->model = $data->model;
$car->description = $data->description;



if ($car->update_Car()) {
    echo json_encode(
        array('message' => 'Car Updated')
    );
} else {
    echo json_encode(
        array('message' => 'Car not updated')
    );
}
