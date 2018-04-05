#!/usr/bin/env php
<?php
	function ft_split($string)
	{
		$array = explode(" ", $string);
		$array = array_filter($array, 'strlen');
		if ($array != null)
			sort($array);
		return ($array);
	}
	function index($needle)
	{
		$ret =  array_search($needle, array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m",
		"n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1",
		"2", "3", "4", "5", "6", "7", "8", "9", " ", "!", "\"", "#", "$", "%",
		"&", "'", "(", ")", "*", "+", ",", "-", ".", "/", ":", ";", "<", "=", ">",
		"?", "@", "[", "\\", "]", "^", "_", "`", "{", "|", "}", "~"));
		return (($ret == false) ? -1 : $ret);
	}
	function compareTo($a, $b)
	{
		$str1 = strtolower($a);
		$str2 = strtolower($b);
		$i = 0;
		while($str1[$i] && $str2[$i] && $str1[$i] == $str2[$i])
			$i++;
		return (index($str1[$i]) - index($str2[$i]));
	}
	if ($argc < 2) exit;
	array_shift($argv);
	$arr = array();
	foreach ($argv as $x)
	{
		$splitted = ft_split($x);
		$arr = array_merge($arr, $splitted);
	}
	usort($arr, "compareTo");
	foreach ($arr as $x)
		echo "{$x}\n"
 ?>
