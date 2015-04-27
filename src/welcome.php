<?php
require_once "part/session.php";
if (isset($_POST['login']) > 0)
    $_SESSION['login'] = $_POST['login'];
if (isset($_POST['password']) > 0)
    $_SESSION['password'] = md5($_POST['password']);
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        <?php
        echo $lang_array['enter_Title'];
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
    $login = $_SESSION['login'];
    $pass = $_SESSION['password'];

    require "part/connectToDB.php";

    $result = mysql_query("SELECT * FROM users WHERE login = \"$login\"");
    if (mysql_num_rows($result) < 1){
        echo "<div class=\"container content\">";
        echo "<div class='alert alert-warning'><b>";

        echo $lang_array['UserNotFound'];

        echo "</b></div>";
        echo "</div>";
    } else {
    $q = mysql_fetch_array($result);
    if ($pass !== $q['password']) {
        echo "<div class=\"container content\">";
        echo "<div class='alert alert-danger'><b>";

        echo $lang_array['IncorrectPassword'];

        echo "</b></div>";
        echo "</div>";
    } else {
        $data_user = mysql_query("SELECT * FROM datauser WHERE login = \"$login\"");
        $data = mysql_fetch_array($data_user);
        echo "<h4>".$lang_array['Login'].": ".$data['login']."</h4><br>";

        ?>

        <div class="row">
            <div class="col-sm-6">
                <?php
                echo "<img src='".$data['foto']."'>";
                ?>
            </div>
            <div class="col-sm-6" style="text-align: left">
                <?php
                echo $lang_array['Name'].": ".$data['first_name']."<br>";
                echo $lang_array['SecondName'].": ".$data['second_name']."<br>";
                echo $lang_array['Email'].": ".$data['email']."<br>";
                if ($data['sex'] == 0)
                    echo $lang_array['Sex'].": ".$lang_array['SexFemale']."<br>";
                else if ($data['sex'] == 1)
                    echo $lang_array['Sex'].": ".$lang_array['SexMale']."<br>";
                echo $lang_array['About'].": ".$data['about']."<br>";
                ?>
            </div>
        </div>
</div>
<?php
}}
mysql_close();
?>

<div class="container content">
    <a href="changeLang/changeLangToEN.php"><?php echo $lang_array['en'];?></a> |
    <a href="changeLang/changeLangToUA.php"><?php echo $lang_array['ukr'];?></a> |
    <a href="changeLang/changeLangToRU.php"><?php echo $lang_array['ru'];?></a>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>