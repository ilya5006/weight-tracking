<?php
    require_once __DIR__ . '/Classes/Database.php';
    
    SESSION_START();

    $username = isset($_REQUEST['username']) ? $db->escapeString($_REQUEST['username']) : $_SESSION['username'];

    $userInfo = $db->queryAll("SELECT `username`, `weight`, `date` FROM `weights` WHERE `username` = '$username'");

    echo json_encode($userInfo, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
    
?>