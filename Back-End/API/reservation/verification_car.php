<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';

include_once '../../models/reservation.php';




$database = new Database();
$db = $database->connect();

$reservation = new Reservation($db);

$data = json_decode(file_get_contents("php://input"));

$result = $reservation->verification_car();
$num = $result->rowCount();

if ($num > 0) {

    $available_cars = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $cars_free = array(
            'id' => $id,
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
