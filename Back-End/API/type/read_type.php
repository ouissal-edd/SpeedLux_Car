<?php
//L'entête Access-Control-Allow-Origin renvoie une réponse indiquant si les ressources peuvent être partagées avec une origine donnée. 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/type.php';

$database = new Database;
$db = $database->connect();

$type =  new Type($db);

$resultat = $type->read_Type();
$num = $resultat->rowCount();
if ($num > 0) {
    $types_arr = array();
    $types_arr['data'] = array();

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        //   Importe les variables dans la table
        extract($row);

        $types_ithem = array(
            'type_label' => $type_label,
            'type_description' => $type_description,


        );

        array_push($types_arr['data'], $types_ithem);
    }

    echo json_encode($types_arr);
} else {
    echo json_encode(array('message' => 'Not Found'));
}
