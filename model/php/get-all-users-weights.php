<?php
    require_once __DIR__ . '/Classes/Database.php';

    SESSION_START();

    $username = isset($_REQUEST['username']) ? $db->escapeString($_REQUEST['username']) : $_SESSION['username'];

    $users = $db->queryAll("SELECT DISTINCT `username`, `weight` FROM `weights` WHERE `username` != '$username' ORDER BY id DESC");
    
    echo json_encode($users, JSON_NUMERIC_CHECK);
?>