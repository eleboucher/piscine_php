#!/usr/bin/env php
<?php
	function change_operator($t)
	{
		if ($t == '+')
			return 0;
		else if ($t == '-')
			return 1;
		else if ($t == '*')
			return 2;
		else if ($t == '/')
			return 3;
		else if ($t == '%')
			return 4;
		return 5;
	}

	if ($argc > 4 || $argc < 4)
	{
		echo "Incorrect Parameters";
		exit();
	}
	$a = trim($argv[1]);
	$op = change_operator(trim($argv[2]));
	$b = trim($argv[3]);
	$operator = array(
		function($a, $b){return $a + $b;},
		function($a, $b){return $a - $b;},
		function($a, $b){return $a * $b;},
		function($a, $b){return $a / $b;},
		function($a, $b){return $a % $b;}
	);
	if ($op != 5)
		echo $operator[$op]($a,$b)."\n";
 ?>
