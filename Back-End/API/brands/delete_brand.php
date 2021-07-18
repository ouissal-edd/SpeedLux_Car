<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/brand.php';

$database = new Database();
$db = $database->connect();

$brand = new Brand($db);

$data = json_decode(file_get_contents("php://input"));

$brand->brand_id = $data->brand_id;

if ($brand->delete_Brand()) {
    echo json_encode(
        array('message' => 'brand deleted')
    );
} else {
    echo json_encode(
        array('message' => 'brand not deleted')
    );
}
