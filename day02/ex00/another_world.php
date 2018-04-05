#!/usr/bin/php
<?php
	$clean_str = preg_replace('/[ \t]+/', ' ', trim($argv[1]));
	echo "{$clean_str}";
 ?>