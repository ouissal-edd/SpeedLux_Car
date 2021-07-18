<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/brand.php';

$database = new Database();
$db = $database->connect();

$brand = new Brand($db);

$data = json_decode(file_get_contents("php://input"));

$brand->brand_id = $data->brand_id;
$brand->brand_name = $data->brand_name;
$brand->brand_image = $data->brand_image;





if ($brand->update_brand()) {
    echo json_encode(
        array('message' => 'brand Updated')
    );
} else {
    echo json_encode(
        array('message' => 'brand not updated')
    );
}
