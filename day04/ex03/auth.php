<?php
    function auth($login, $passwd){
        if (file_exists("../private/passwd"))
            $data = unserialize(file_get_contents('../private/passwd', FILE_USE_INCLUDE_PATH));
        else
            return false;
        $hashed = hash("whirlpool", $passwd);
        foreach ($data as $user)
        {
            if ($user['login'] == $login && $user['passwd'] == $hashed)
                return true;
        }
        return false;
    }
?>