<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/user.php';

$database = new Database();
$db = $database->connect();

$users = new Users($db);

$data = json_decode(file_get_contents("php://input"));

$users->user_id = $data->user_id;
$users->user_email = $data->user_email;
$users->full_name = $data->full_name;
$users->password = $data->password;


if ($users->update_users()) {
  echo json_encode(
    array('message' => 'useer Updated')
  );
} else {
  echo json_encode(
    array('message' => 'user not updated')
  );
}
