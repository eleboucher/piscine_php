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
    if(!ifisset($_GET, 'action'))
            exit;
    if ($_GET['action'] == "set" && ifisset($_GET, "name"))
            setcookie($_GET["name"], $_GET["value"], time() + 3600);
    if ($_GET['action'] == "del" && ifisset($_GET, "name"))
           setcookie($_GET["name"]);
    if ($_GET['action'] == "get" && ifisset($_GET, "name"))
    {

        if (ifisset($_COOKIE, $_GET["name"]))
        {
            $val = $_COOKIE[$_GET["name"]];
            if ($val)
                echo "{$val}\n";
        }
  
    }
?>