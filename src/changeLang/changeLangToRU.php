<?php
    session_start();
    $_SESSION['lang'] = "ru";

    header("Location: ".$_SERVER['HTTP_REFERER']);
?>