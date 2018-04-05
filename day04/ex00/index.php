<?php
    function ifisset($arr, $elem)
    {
        foreach($arr as $key => $value)
        {
            if ($key == $elem)
                return true;
        }  
        return false;
    }
    session_start();
    if(ifisset($_GET, 'login') && ifisset($_GET, 'passwd') && ifisset($_GET, 'submit') && $_GET['submit'] == "OK")
    {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
        $_SESSION['submit'] = $_GET['submit'];
    }
    else
    {
        if(!ifisset($_SESSION, 'login') && !ifisset($_SESSION, 'passwd') && !ifisset($_SESSION, 'submit'))
        {
            $_SESSION['login'] = "";
            $_SESSION['passwd'] = "";
            $_SESSION['submit'] = "OK";
        }
    }
?>

<html>
<body>
        <form method="get" action="index.php">
            Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login'] ?>" required/>
            </br>
            Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']?>" required/>
            <input type="submit" name="submit" value="<?php echo $_SESSION['submit'] ?>"/>
        </form>
</body>
</html>