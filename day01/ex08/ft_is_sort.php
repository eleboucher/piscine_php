<?php
	function ft_is_sort($tab)
	{
		$cpy = $tab;
		sort($cpy);
		for ($i = 0; $i < count($tab); $i++)
		{
			if ($cpy[$i] != $tab[$i])
				return false;
		}
		return true;
	}
 ?>
