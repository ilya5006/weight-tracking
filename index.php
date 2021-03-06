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

    <title>Weight-Tracking</title>
</head>

<body>
    <div id="buttons">
        <a href="./model/php/logout.php" id="logout">Выйти</a>

        <?php
        if (isset($_GET['username']))
        {
            echo '<a href="index.php">Вернуться домой</a>';
        }
        ?>
    </div>
    <?php require './view/users-div.html'; ?>
    <?php require './view/graph.html'; ?>

    <?php
    if (empty($_GET['username']))
    {
        require './view/new-weight-form.html';
    }
    ?>

    <script src="./model/js/graph.js"></script>
    <script src="./model/js/main.js"></script>
</body>

</html>
