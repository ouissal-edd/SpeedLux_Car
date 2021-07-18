<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/reservation.php';

$database = new Database();
$db = $database->connect();

$reservation = new Reservation($db);

$data = json_decode(file_get_contents("php://input"));

$reservation->reservation_id = $data->reservation_id;

if ($reservation->delete_reservation()) {
    echo json_encode(
        array('message' => 'reservation deleted')
    );
} else {
    echo json_encode(
        array('message' => 'reservation not deleted')
    );
}
