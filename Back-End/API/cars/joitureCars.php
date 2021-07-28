<?php
//L'entête Access-Control-Allow-Origin renvoie une réponse indiquant si les ressources peuvent être partagées avec une origine donnée. 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/car.php';

$database = new Database;
$db = $database->connect();

$car =  new Car($db);

$resultat = $car->JointureCars();
$num = $resultat->rowCount();
if ($num > 0) {
    $car_arr = array();

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $car_ithem = array(
            'id' => $id,
            'car_name' => $car_name,
            'brand_name' => $brand_name,
            'type_label' => $type_label,
            'color' => $color,
            'model' => $model,
            'description' => $description,


        );

        array_push($car_arr, $car_ithem);
    }

    echo json_encode($car_arr);
} else {
    echo json_encode(array('message' => 'Not Found'));
}
