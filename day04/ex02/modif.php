<?php
    function get_index($login, $arr)
    {
        $i = 0;
        foreach ($arr as $elem)
        {
            if ($login == $elem['login'])
                return $i;
            $i++;
        }

        return -1;
    }

    if (!file_exists("../private"))
        mkdir("../private");
    if (file_exists("../private/passwd"))
        $data = unserialize(file_get_contents('../private/passwd', FILE_USE_INCLUDE_PATH));
    else 
        $data = NULL;
    if (!(isset($_POST['login']) && (isset($_POST['newpw']) && $_POST['newpw'] != "") && (isset($_POST['oldpw']) && $_POST['oldpw'] != "") && (isset($_POST['submit']) && $_POST['submit'] == "OK"))) {
        echo "ERROR\n";
        exit;
    }
    $index = get_index($_POST['login'], $data);
    if ($index == -1)
    {
        echo "ERROR\n";
        exit;
    }
    $hashedold = hash("whirlpool", $_POST['oldpw']);
    $hashednew = hash("whirlpool", $_POST['newpw']);
    if ($hashedold != $data[$index]['passwd'])
    {
        echo "ERROR\n";
        exit;
    }
    else {
        $data[$index]['passwd'] = $hashednew;
    }
    if (file_put_contents("../private/passwd", serialize($data)) == false)
    {
        echo "ERROR\n";
        exit;
    }
    echo "OK\n";
?>