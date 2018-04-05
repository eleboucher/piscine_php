#!/usr/bin/php
<?php
    $days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    $months = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
    if ($argc != 2) exit;
    if (preg_match_all('/ /', $argv[1]) != 4)
        exit("Wrong Format");
    $array = preg_split('/ /', $argv[1]);
    if (count($array) != 5)
        exit("Wrong Format");
    if (array_search(ucfirst($array[0]), $days) == false)
        exit("Wrong Format");
    if (preg_match("/\d\d|\d/", $array[1]) == 1)
        $day = $array[1];
    else
        exit("Wrong Format");
    if (($month = array_search(ucfirst($array[2]), $months)) == false)
        exit("Wrong Format");
    $month++;
    if (preg_match("/\d\d\d\d/", $array[3]) == 1)
        $year = $array[3];
    else
        exit("Wrong Format");
    $date = "{$year}-cd -{$day}";
    if (preg_match("/\d\d:\d\d:\d\d/", $array[4]) == 1)
        $time = $array[4];
    else
        exit("Wrong Format");
    date_default_timezone_set("Europe/Paris");
    $timestamp = strtotime("{$date} {$time}");
    echo $timestamp."\n";
?>