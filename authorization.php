<?php
    SESSION_START();
    
    if (isset($_SESSION['username'])) header('Location: ./index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/authorization.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
    <?php require './view/authorization-form.html'; ?>
</body>
</html>