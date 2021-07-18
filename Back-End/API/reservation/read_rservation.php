<?php
//L'entête Access-Control-Allow-Origin renvoie une réponse indiquant si les ressources peuvent être partagées avec une origine donnée. 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/reservation.php';

$database = new Database;
$db = $database->connect();

$reservation =  new Reservation($db);

$resultat = $reservation->read_reservation();
$num = $resultat->rowCount();
if ($num > 0) {
    $reservation_arr = array();
    // $reservation_arr['data'] = array();

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        //   Importe les variables dans la table
        extract($row);

        $reservation_ithem = array(

            'user_id ' => $user_id,
            'car_id' => $car_id,
            'pickup_date' => $pickup_date,
            'return_date' => $return_date,
            'pickup_location' => $pickup_location,
            'return_location' => $return_location,
            'num' => $num,


        );

        array_push($reservation_arr, $reservation_ithem);
    }

    echo json_encode($reservation_arr);
} else {
    echo json_encode(array('message' => 'Not Found'));
}
