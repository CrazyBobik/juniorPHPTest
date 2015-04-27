<?php
    session_start();
    $_SESSION['lang'] = "ua";

    header("Location: ".$_SERVER['HTTP_REFERER']);
?>