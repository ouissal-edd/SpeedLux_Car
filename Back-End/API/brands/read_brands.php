<?php
//L'entête Access-Control-Allow-Origin renvoie une réponse indiquant si les ressources peuvent être partagées avec une origine donnée. 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/brand.php';

$database = new Database;
$db = $database->connect();

$brand =  new Brand($db);

$resultat = $brand->read_brands();
$num = $resultat->rowCount();
if ($num > 0) {
    $brands_arr = array();
    // $brands_arr['data'] = array();

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        //   Importe les variables dans la table
        extract($row);

        $brands_ithem = array(
            'brand_name' => $brand_name,
            'brand_image' => $brand_image,
            'num' => $num,


        );

        array_push($brands_arr, $brands_ithem);
    }

    echo json_encode($brands_arr);
} else {
    echo json_encode(array('message' => 'Not Found'));
}
