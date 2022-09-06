<?php
    require_once '../config/connect.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    mysqli_query($connect, "UPDATE `doctors` SET `JOB_TITLE` = '$title', `FULL_NAME` = '$description', `CATEGORY` = '$category' WHERE `doctors`.`ID` = '$id'");

    header('location: /admin.php');
?>
