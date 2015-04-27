<?php
    require_once "part/session.php";
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        <?php
            echo $lang_array['registration_Title'];
        ?>
    </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="text-align: center">

    <?php
        require "part/connectToDB.php";
        require "part/validator.php";

        if (isset($_SESSION['error'])){
            echo "<div class=\"container content\">";
            echo "<div class='alert alert-warning'><b>";

            echo $_SESSION['error']."<br>";
            echo "<a href='registration.php'>".$lang_array['BtnBack']."</a>";

            echo "</b></div>";
            echo "</div>";
        } else {
            $result = mysql_query("SELECT * FROM users WHERE login = \"$login\"");

            if (mysql_num_rows($result) < 1) {
                mkdir("images/" . $login);
                move_uploaded_file($_FILES['file']['tmp_name'], $image);

                mysql_query("SET NAMES utf8");

                mysql_query('INSERT INTO users (login, password) VALUES ("' . $login . '", "' . $password . '")');

                mysql_query('INSERT INTO datauser (first_name, second_name, email, sex, about, foto, login)
                             VALUES ("' . $name . '", "' . $second_name . '", "' . $email . '", "' . $sex . '",
                                     "' . $about . '", "' . $image . '", "' . $login . '" )');

                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;

                echo "<div class=\"container content\">";
                echo "<div class='alert alert-success'><b>";

                echo $lang_array['SuccessRegistration']."<br>";
                echo "<a href='welcome.php'>".$lang_array['BtnMain']."</a>";

                echo "</b></div>";
                echo "</div>";
            } else {
                $array = array (
                    "login" => $login,
                    "name" => $name,
                    "secondName" => $second_name,
                    "email" => $email,
                    "about" => $about
                );
                $_SESSION['fields'] = $array;

                echo "<div class=\"container content\">";
                echo "<div class='alert alert-warning'><b>";

                echo $lang_array['ThisUserExist'];

                echo "</b></div>";
                echo "</div>";
            }
        }
    ?>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>
