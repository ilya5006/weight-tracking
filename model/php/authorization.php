<?php
    SESSION_START();

    $_SESSION['username'] = $_REQUEST['username'];

    header('Location: ../../index.php');
?>