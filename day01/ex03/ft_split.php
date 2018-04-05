<?php
	function ft_split($string)
	{
		$array = explode(" ", $string);
		$array = array_filter($array, 'strlen');
		if ($array != null)
			sort($array);
		return ($array);
	}
 ?>
