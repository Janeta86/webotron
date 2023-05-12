<?php
    session_start(["use_strict_mode" => true]);
    require('connection.php');
    unset($_SESSION['message']);
    if (isset($_POST['login'])){

        $result = $conn->query("SELECT * FROM admins WHERE login = \"" . $_POST['login'] . "\"");

        if ($row = $result->fetch())
        {
            if ($_POST["password"] == $row['password']){
                $_SESSION['login'] = $_POST['login'];
                setcookie("login", $_SESSION['login']);
                setcookie("password", $_SESSION['password']);
                header("Location: admin.php");
                die();
            }
            else {
                $_SESSION['message'] = 'Неправильный логин или пароль!';
                header("Location: admin.php");
                die();
            }

        }
        else {
            $_SESSION['message'] = 'Неправильный логин или пароль!';
            header("Location: admin.php");
            die();
        }

    }
    if ($_GET['logout'] == 1){
        session_unset();
        $_SESSION['message'] = 'Вы успешно вышли из сиситемы';
        setcookie("login",$_COOKIE, time()+60*60*24);
        session_unset();
        setcookie("password", "", time()-9999);
        header("Location: admin.php");
        die();
    }
