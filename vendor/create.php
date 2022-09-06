<?php
    require_once '../config/connect.php';

   
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    mysqli_query($connect, "INSERT INTO `doctors` (`ID`, `IMG`, `JOB_TITLE`, `FULL_NAME`, `CATEGORY`) VALUES (NULL, '', '$title', '$description', '$category')");

    header('location: /admin.php');
?>
