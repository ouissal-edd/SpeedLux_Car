<?php

if (isset($_POST['btn-send'])) {
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];

    if (empty($Email) || empty($Subject) || empty($Msg)) {
        header('location:../Front-End/contact.php?EROOREMPTY');
    } else {
        $to = "ouissal.eddouj21@gmail.com";

        if (mail($to, $Subject, $Msg, $Email)) {
            header("location:../Front-End/contact.php?success");
        }
    }
} else {
    header("location:contact.php");
}
