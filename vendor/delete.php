<?php
    require_once '../config/connect.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `doctors` WHERE `doctors`.`ID` = '$id'");

    header('location: /admin.php');
?>
