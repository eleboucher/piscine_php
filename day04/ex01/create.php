<?php
    if (!file_exists("../private"))
        mkdir("../private");
    if (file_exists("../private/passwd"))
        $data = unserialize(file_get_contents('../private/passwd', FILE_USE_INCLUDE_PATH));
    else 
        $data = NULL;
    if (!(isset($_POST['login']) && (isset($_POST['passwd']) && $_POST['passwd'] != "") && (isset($_POST['submit']) && $_POST['submit'] == "OK"))) {
        echo "ERROR\n";
        exit;
    }
    if ($data != NULL)
        foreach ($data as $login)
        {
            if ($_POST['login'] == $login['login'])
            {
                echo "ERROR\n";
                exit;
            }
        }
    $hashed = hash("whirlpool", $_POST['passwd']);
    $data[] = array("login" => $_POST['login'], "passwd" => $hashed);
    if (file_put_contents("../private/passwd", serialize($data)) == false)
    {
        echo "ERROR\n";
        exit;
    }
    echo "OK\n";
?>