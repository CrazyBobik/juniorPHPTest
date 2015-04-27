<?php
    session_start();
    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "ru";

    $lang_array = readMap($_SESSION['lang']);

    function readMap($lang){
        $result = array();

        $f_arr = explode("\n", file_get_contents("languages/".$lang.".property"));

        for ($i = 0; $i < count($f_arr); $i++){
            $temp_arr = explode(": ", $f_arr[$i]);
            $result[$temp_arr[0]] = $temp_arr[1];
        }

        return $result;
    }

?>

