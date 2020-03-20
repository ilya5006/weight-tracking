<?php
SESSION_START();

if (empty($_SESSION['username'])) header('Location: ./authorization.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/main.css">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <title>Document</title>
</head>

<body>
    <a href="./model/php/logout.php">Выйти</a>

    <?php require './view/users-div.html'; ?>

    <script src="./model/js/graph.js"></script>
</body>

</html>