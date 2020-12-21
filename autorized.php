
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport">

    <meta http-equiv="X-UA-Compatible" content="ie=edge"  >
    <link rel="stylesheet" href="style.css" >
    <title>document</title>
</head>
</html>


<div class="t143" id="login-form">
    <h1>АВТОРИЗАЦИЯ</h1>

    <fieldset class="account-info">
        <form class="text" action="autorized.php"  method="POST">
            <input type="text" name="username" required value="Логин" >
            <input type="password"  name="passwords" required value="Пароль" >
            <fieldset class="account-action">
                <button type="submit"   class="btn"> Войти</button>

            </fieldset>
        </form>
    </fieldset>
</div>



<?php
session_start();
        $host = 'localhost';
        $user = 'root';
        $password = 'etoges420';
        $db_name = 'gsu';

        $link = mysqli_connect($host, $user, $password, $db_name);


        if (isset($_POST['username'])
and isset($_POST['passwords'])) {


            $name = $_POST['username'];
            $passwords = $_POST['passwords'];


            $query = "SELECT * FROM users where username = '$name' and passwords='$passwords' ";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            $count = mysqli_num_rows($result);
            if ($count == 1) {

                $_SESSION['username'] = $name;
            } else {
                $fmsg = "ошибка";


                if (isset($_SESSION['username'])) {
                    $name = $_SESSION['username'];
                    if ($name == 'admin') {
                        echo " hello " . $name . "";
                        echo " Вы вошли ";
                        echo "<a href='index.html' class='btn'>Перейти на сайт</a> ";
                        echo "<a href='logout.php' class='btn'>выйти</a> ";
                    } else if( $name == 'AKovalev') {

                            echo " hello " . $name . "";
                            echo " Вы вошли ";
                            echo "<a href='index2.html' class='btn'>Перейти на сайт</a> ";
                            echo "<a href='logout.php' class='btn'>выйти</a> ";

                        } else {
                         $name == 'KPetrov';

                            echo " hello " . $name . "";
                            echo " Вы вошли ";
                            echo "<a href='index3.html' class='btn'>Перейти на сайт</a> ";
                            echo "<a href='logout.php' class='btn'>выйти</a> ";


                    }
                    }
                }

        }
?>

