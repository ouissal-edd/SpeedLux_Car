
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

$reservation->user_id = $data->user_id;
$reservation->car_id = $data->car_id;
$reservation->pickup_date = $data->pickup_date;
$reservation->return_date = $data->return_date;
$reservation->pickup_location = $data->pickup_location;
$reservation->return_location = $data->return_location;




if ($reservation->create_reservation()) {
    echo json_encode(
        array(

            'msg' => 'New Reservation  has been inserted successfully.'
        )
    );
} else {
    echo json_encode(
        array(
            'msg' => 'Reservation has been created'
        )
    );
}
?>












