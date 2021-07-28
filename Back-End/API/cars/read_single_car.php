<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


include_once '../../config/Database.php';
include_once '../../models/car.php';

$database = new Database;
$db = $database->connect();

$car =  new Car($db);



// Get ID
$car->id = isset($_GET['id']) ? $_GET['id'] : die();

// Get PRODUCT
$car->read_single();

// Create array
$car_arr = array(
    'id' => $car->id,
    'car_name' => $car->car_name,
    'color' => $car->color,
    'model' => $car->model,
    'description' => $car->description,
);

// Make JSON
print_r(json_encode($car_arr));
