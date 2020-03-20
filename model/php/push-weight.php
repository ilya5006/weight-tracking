<?php
    require_once __DIR__ . '/Classes/Database.php';

    SESSION_START();

    $weight = (float)$_REQUEST['weight'];
    $username = $db->escapeString($_SESSION['username']);
    $date = (new DateTime())->format('Y-m-d H:i:s');

    $db->queryExecute("INSERT INTO `weights` VALUES (NULL, '$username', '$weight', '$date')");

    header('Location: ../../index.php');
?>