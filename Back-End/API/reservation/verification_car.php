<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../config/Database.php';

include_once '../../models/reservation.php';




$database = new Database();
$db = $database->connect();

$reservation = new Reservation($db);

$data = json_decode(file_get_contents("php://input"));

$reservation->pickup_date = $data->pickup_date;
$reservation->return_date = $data->return_date;


$result = $reservation->verification_car();
$num = $result->rowCount();

if ($num > 0) {

    $available_cars = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $cars_free = array(
            'car_name' => $car_name,
            'color' => $color,
            'model' => $model,
            'description' => $description,
            'brand_name' => $brand_name,
            'brand_image' => $brand_image,
            'type_label' => $type_label,
            'type_description' => $type_description,




        );

        array_push($available_cars, $cars_free);
    }
    echo json_encode($available_cars);
} else {
    echo json_encode(
        array('message' => 'Car not nooononono')
    );
}
