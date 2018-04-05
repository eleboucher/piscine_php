#!/usr/bin/env php
<?php
	function ft_split($string)
	{
		$array = explode(" ", $string);
		$array = array_filter($array, 'strlen');
		return ($array);
	}
	$ag = ft_split($argv[1]);
	$first_elem = array_shift($ag);
	echo (implode(" ", $ag));
	echo " {$first_elem}\n";
 ?>
