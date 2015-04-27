<?php
    require_once "part/session.php";
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
    <div class="container content">
        <form action="welcome.php" method="post" name="enter">
            <a href="registration.php">
                <?php
                    echo $lang_array['Registration'];
                ?>
            </a><br><br>
            <input type="text" class="form-control" name="login"
                   placeholder="<?php echo $lang_array['EnterLogin'];?>"/><br>
            <input type="password" class="form-control" name="password"
                   placeholder="<?php echo $lang_array['EnterPass'];?>"/><br>

            <input type="submit" class="btn btn-primary btn-block" value=<?php echo $lang_array['BtnEnter'];?>>
            <br><br>
        </form>
    </div>

    <div class="container content">
        <a href="changeLang/changeLangToEN.php"><?php echo $lang_array['en'];?></a> |
        <a href="changeLang/changeLangToUA.php"><?php echo $lang_array['ukr'];?></a> |
        <a href="changeLang/changeLangToRU.php"><?php echo $lang_array['ru'];?></a>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>