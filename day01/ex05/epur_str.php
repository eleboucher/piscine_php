#!/usr/bin/env php
<?php
	function ft_split($string)
	{
		$array = explode(" ", $string);
		$array = array_filter($array, 'strlen');
		return ($array);
	}
	if ($argc != 2) exit;
	$clean_arr = ft_split(trim($argv[1]));
	$clean_str = implode(" ", $clean_arr);
	echo "{$clean_str}\n";
?>
