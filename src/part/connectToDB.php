<?php
    $host = "localhost:3306";
    $user = "root";
    $passForDB = "root";
    $db = "db_test";

    mysql_connect($host, $user, $passForDB);
    mysql_select_db($db);
?>