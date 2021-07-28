<?php


$target_path  = "../image_Cars/";

$uniq_name = $_POST['uniqName'];
$target_path = $target_path . $uniq_name;

if (move_uploaded_file($_FILES['brand_image']['tmp_name'], $target_path)) {
    echo "The file " .  basename($_FILES['brand_image']['name']) .    " has been uploaded";
} else {
    echo "There was an error uploading the file, please try again!";
}
