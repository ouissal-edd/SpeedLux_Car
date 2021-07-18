<?php
//L'entête Access-Control-Allow-Origin renvoie une réponse indiquant si les ressources peuvent être partagées avec une origine donnée. 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/car.php';

$database = new Database;
$db = $database->connect();

$car =  new Car($db);

$resultat = $car->read_Car();
$num = $resultat->rowCount();
if ($num > 0) {
    $cars_arr = array();
    // $cars_arr['data'] = array();

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        //   Importe les variables dans la table
        extract($row);

        $cars_ithem = array(
            'brand_id' => $brand_id,
            'type_id' => $type_id,
            'car_name' => $car_name,
            'color' => $color,
            'model' => $model,
            'description' => $description,
            'num' => $num,


        );

        array_push($cars_arr, $cars_ithem);
    }

    echo json_encode($cars_arr);
} else {
    echo json_encode(array('message' => 'Not Found'));
}
