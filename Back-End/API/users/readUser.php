<?php
//L'entête Access-Control-Allow-Origin renvoie une réponse indiquant si les ressources peuvent être partagées avec une origine donnée. 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/user.php';

$database = new Database;
$db = $database->connect();

$users =  new Users($db);


$resultat = $users->read_users();
$num = $resultat->rowCount();
if ($num > 0) {
  $users_arr = array();
  // $users_arr['data'] = array();

  while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

    $users_ithem = array(
      'user_email' => $user_email,
      'full_name' => $full_name,
      'password' => $password,
      'num' => $num,

    );

    array_push($users_arr, $users_ithem);
  }


  echo json_encode($users_arr);
} else {
  echo json_encode(array('message' => 'Not Found'));
}
