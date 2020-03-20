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
    <link rel="stylesheet" href="./view/css/graph.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <title>Document</title>
</head>

<body>
    <a href="./model/php/logout.php">Выйти</a>

    <?php
    if (isset($_GET['username']))
    {
        echo '<a href="index.php">Вернуться домой</a>';
    }
    ?>
    <?php require './view/users-div.html'; ?>
    <?php require './view/graph.html'; ?>

    <?php
    if (empty($_GET['username']))
    {
        require './view/new-weight-form.html';
    }
    ?>

    <script src="./model/js/graph.js"></script>
</body>

</html>