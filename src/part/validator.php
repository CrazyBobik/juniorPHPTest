<?php

    $login = $_POST['login'];
    if (!preg_match("/^.{3,20}$/", $login))
        $_SESSION['error'] = $lang_array['LoginError'];

    $password = $_POST['password'];
    if (!preg_match("/^[a-zA-Z0-9_$#]{3,20}$/", $password))
        $_SESSION['error'] = $lang_array['PasswordError'];
    else
        $password = md5($password);

    $name = $_POST['name'];
    if (strlen($name) > 50 || strlen($name) < 3)
        $_SESSION['error'] = $lang_array['NameError'];

    $second_name = $_POST['second_name'];
    if (strlen($second_name) > 50 || strlen($second_name) < 3)
        $_SESSION['error'] = $lang_array['SecondNameError'];

    $email = $_POST['email'];
    if (strlen($email) > 0)
        if (!preg_match("/^([a-z0-9_-]+\\.)*[a-z0-9_-]+@[a-z0-9_-]+(\\.[a-z0-9_-]+)*\\.[a-z]{2,6}$/", $email))
            $_SESSION['error'] = $lang_array['EmailError'];


    $sex = $_POST['sex'];

    $about = $_POST['about'];
    if (!preg_match("/^.{0,255}$/", $about))
        $_SESSION['error'] = $lang_array['AboutError'];

    $image = "images/default.jpg";
    if( !empty( $_FILES['file']['name'] ) ) {
        // ?????????, ??? ??? ???????? ?? ????????? ??????
        if ($_FILES['file']['error'] == 0) {
            // ???? ???? ???????? ???????, ?? ????????? - ??????????? ?? ??
            if (substr($_FILES['file']['type'], 0, 5) == 'image') {
                $isNorm = true;
                $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
                foreach ($blacklist as $item)
                    if(preg_match("/$item\$/i", $_FILES['file']['name'])) {
                        $isNorm = false;
                        $_SESSION['error'] = $lang_array['ImgError'];
                    }

                if ($_FILES['file']['size'] > 1024 * 1024){
                    $isNorm = false;
                    $_SESSION['error'] = $lang_array['ImgError'];
                }

                if ($isNorm){
                    $image = "images/".$login."/".$_FILES['file']['name'];
                }
            } else {
                $_SESSION['error'] = $lang_array['ImgError'];
            }
        }
    }

    if (isset($_SESSION['error'])){
        $array = array (
            "login" => $login,
            "name" => $name,
            "secondName" => $second_name,
            "email" => $email,
            "about" => $about
        );
        $_SESSION['fields'] = $array;
    } else
        unset($_SESSION['fields']);
?>