<?php
    require_once "part/session.php";
    unset($_SESSION['error']);
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

    <script language="JavaScript" src="js/validator.js"> </script>

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
        <form action="registr.php" method="post" name="form"
              enctype="multipart/form-data"
              accept-charset="UTF-8" onsubmit="return validate()">
            <table class="table table-striped">
                <tr>
                    <td>
                        <?php
                            echo $lang_array['Login'];
                        ?>
                    </td>
                    <td>
                        <input type="text" name="login" class="form-control"
                               placeholder="<?php echo $lang_array['EnterLogin'];?>"
                               value="<?php if (isset($_SESSION['fields']))
                                        echo $_SESSION['fields']['login'];
                                      ?>"
                               size="20" maxlength="20"><br>
                        <span style="color:#ff0000; display: none" id="loginf"><?php
                                echo $lang_array['LoginError'];
                            ?></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php
                            echo $lang_array['Password'];
                        ?>
                    </td>
                    <td>
                        <input type="password" name="password" class="form-control"
                               placeholder="<?php echo $lang_array['EnterPass'];?>"
                               size="20" maxlength="20"><br>
                        <span style="color:#ff0000; display: none" id="passwordf"><?php
                                echo $lang_array['PasswordError'];
                            ?></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php
                            echo $lang_array['Name'];
                        ?>
                    </td>
                    <td>
                        <input type="text" name="name" class="form-control"
                               placeholder="<?php echo $lang_array['EnterName'];?>"
                               value="<?php if (isset($_SESSION['fields']))
                                        echo $_SESSION['fields']['name'];
                                      ?>"
                               size="20" maxlength="50"><br>
                        <span style="color:#ff0000; display: none" id="namef"><?php
                                echo $lang_array['NameError'];
                            ?></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php
                            echo $lang_array['SecondName'];
                        ?>
                    </td>
                    <td>
                        <input type="text" name="second_name" class="form-control"
                               placeholder="<?php echo $lang_array['EnterSecondName'];?>"
                               value="<?php if (isset($_SESSION['fields']))
                                        echo $_SESSION['fields']['secondName'];
                                      ?>"
                               size="20" maxlength="50"><br>
                        <span style="color:#ff0000; display: none" id="second_namef"><?php
                                echo $lang_array['SecondNameError'];
                            ?></span>
                    </td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td>
                        <input type="text" name="email" class="form-control"
                               placeholder="<?php echo $lang_array['EnterEmail'];?>"
                               value="<?php if (isset($_SESSION['fields']))
                                         echo $_SESSION['fields']['email'];
                                      ?>"
                               size="20" maxlength="50"><br>
                        <span style="color:#ff0000; display: none" id="emailf"><?php
                                echo $lang_array['EmailError'];
                            ?></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php
                            echo $lang_array['Sex'];
                        ?>
                    </td>
                    <td>
                        <input type="radio" name="sex" value="0" checked>
                        <?php
                            echo $lang_array['SexFemale'];
                        ?>
                        <input type="radio" name="sex" value="1">
                        <?php
                            echo $lang_array['SexMale'];
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php
                            echo $lang_array['About'];
                        ?>
                    </td>
                    <td>
                        <textarea placeholder="<?php echo $lang_array['EnterAbout'];?>"
                                  class="form-control" cols="50" rows="7"
                                  name="about"><?php if (isset($_SESSION['fields']))
                                                 echo $_SESSION['fields']['about'];
                                                ?></textarea><br>
                        <span style="color:#ff0000; display: none" id="aboutf"><?php
                                echo $lang_array['AboutError'];
                            ?></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php
                            echo $lang_array['Photo'];
                        ?>
                    </td>
                    <td>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                        <input type="file" class="btn btn-default" name="file" value="sss">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" class="btn btn-success" value="
                        <?php
                            echo $lang_array['Registration'];
                        ?>
                        ">
                    </td>
                    <td>
                        <input type="reset" class="btn btn-warning" value="
                        <?php
                            echo $lang_array['Clean'];
                        ?>
                        ">
                    </td>
                </tr>
            </table>
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