<?php
    include ("auth.php");
    session_start();
    if (isset($_GET['login']) && isset($_GET['passwd']))
    {
        if (auth($_GET['login'], $_GET['passwd']))
        {
            $_SESSION['logged_on_user'] = $_GET['login'];
            echo "OK\n";
        }
        else
        {
            $_SESSION['logged_on_user'] = '';
            echo "ERROR\n";
        }
    }
    else
    {
        $_SESSION['logged_on_user'] = '';
        echo "ERROR\n";
    }
?>