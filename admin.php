<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th {
            padding: 10px;
            color: #eee;
            background-color: #222;
        }

        p {
            font-size: 20px;
        }

        input {
            width: 100%;
            border-radius: 5px;
            margin: 15px;
            padding: 10px;
        }

        div {
            width: 80vw;
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        button {
            width: 15%;
            border-radius: 5px;
            border: none;
            background: linear-gradient(#72cec2, #fd7d5a);
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 700;
            cursor: pointer;
        }
    </style>
    <title>Doctors</title>
</head>

<body>
    <table style="margin: 0 auto; width: 100%;">
        <tr>
            <th>Номер п/п</th>
            <th>Фото</th>
            <th>Должность</th>
            <th>ФИО</th>
            <th>Категория</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>

        <?php
        $doctors = mysqli_query($connect, query: "SELECT * FROM `doctors`");
        $doctors = mysqli_fetch_all($doctors);
        foreach ($doctors as $doctors) {
        ?>

            <tr style="text-align: center; font-size: 20px; background-color: #eee;">
                <td><?= $doctors[0] ?></td>
                <td><img src="img/doctors/doctor_5.png" alt="#"></td>
                <td><?= $doctors[2] ?></td>
                <td><?= $doctors[3] ?></td>
                <td><?= $doctors[4] ?></td>
                <td><a style="background-color:  #72cec2; padding: 10px; border-radius: 5px; text-transform: uppercase; font-weight: 700; text-decoration: none; color: #222" href="update.php?id=<?= $doctors[0] ?>">Изменить</a></td>
                <td><a style="background-color:  #fd7d5a; padding: 10px; border-radius: 5px; text-transform: uppercase; font-weight: 700; text-decoration: none; color: #222" href="vendor/delete.php?id=<?= $doctors[0] ?>">Удалить</a></td>
            </tr>
        <?php

        }
        ?>
    </table>

    <h3 style="text-align: center; font-size: 25px;">ДОБАВИТЬ НОВОГО ВРАЧА</h3>
    <form action="vendor/create.php" method="post" style="background-color: #eee; padding: 20px; width: 95%; margin: 0 auto; display: flex;">

        <div>
            <p>Должность</p>
            <input type="text" name="title">
            <p>ФИО</p>
            <input type="text" name="description">
            <p>Категория</p>
            <input type="text" name="category"><br><br><br>
        </div>

        <button type="submit">Добавить</button>

    </form>

</body>

</html>
