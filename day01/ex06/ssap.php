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
	if ($argc < 2) exit;
	array_shift($argv);
	$arr = array();
	foreach ($argv as $x)
	{
		$splitted = ft_split($x);
		$arr = array_merge($arr, $splitted);
	}
	sort($arr);
	foreach ($arr as $x)
		echo "{$x}\n"
 ?>
