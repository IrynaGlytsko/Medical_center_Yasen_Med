<?php

    require_once 'config/connect.php';

    $doctor_id = $_GET['id'];
    $doctor = mysqli_query($connect, "SELECT * FROM `doctors` WHERE `id` = '$doctor_id'");
    $doctor = mysqli_fetch_assoc($doctor);
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
    p{
        font-size: 20px;
    }
    input{
        width: 100%;
        border-radius: 5px;
        margin: 15px;
        padding: 10px;
    }
    div{
        width: 80vw;
        display: flex; 
        justify-content: center;
        padding: 10px;
    }
    button{
        width: 15%;
        border-radius: 5px;
        border: none;
        background: linear-gradient( #72cec2, #fd7d5a);
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 700;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <h3 style="text-align: center; font-size: 25px;">ИЗМЕНИТЬ</h3>
    <form action="vendor/update.php" method="post" style="background-color: #eee; padding: 20px; width: 95%; margin: 0 auto; display: flex;">

    <div>
        <input type="hidden" name="id" value="<?= $doctor['ID'] ?>">
        <p>Должность</p>
        <input type="text" name="title" value="<?= $doctor['JOB_TITLE'] ?>">

        <p>ФИО</p>
        <input type="text" name="description" value="<?= $doctor['FULL_NAME'] ?>">

        <p>Категория</p>
        <input type="text" name="category" value="<?= $doctor['CATEGORY'] ?>">
        <br><br><br>
    </div>

        <button type="submit">Изменить</button>
    
    </form>
</body>

</html>