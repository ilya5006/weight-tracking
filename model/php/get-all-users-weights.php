<?php
    require_once __DIR__ . '/Classes/Database.php';

    SESSION_START();

    $choseUser = isset($_REQUEST['username']) ? $db->escapeString($_REQUEST['username']) : $db->escapeString($_SESSION['username']);

    $currentUser = $db->escapeString($_SESSION['username']);

    $usersInfo = [];

    $usernames = $db->queryAll("SELECT DISTINCT `username` FROM `weights` WHERE `username` != '$choseUser' AND `username` != '$currentUser'");

    foreach ($usernames as $username)
    {
        $username = $username['username'];

        $userWeight = $db->query("SELECT `weight` FROM `weights` WHERE `username` = '$username' ORDER BY id DESC");

        $userWeight = $userWeight['weight'];

        $usersInfo[] = ['username' => $username, 'weight' => $userWeight];

    }
    
    echo json_encode($usersInfo, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
?>