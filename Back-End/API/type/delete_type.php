<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/type.php';

$database = new Database();
$db = $database->connect();

$type = new Type($db);

$data = json_decode(file_get_contents("php://input"));

$type->type_id = $data->type_id;

if ($type->delete_Type()) {
    echo json_encode(
        array('message' => 'Type deleted')
    );
} else {
    echo json_encode(
        array('message' => 'Type not deleted')
    );
}
