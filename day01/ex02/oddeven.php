#!/usr/bin/env php
<?php
	while (42)
	{
		echo "Entrez un nombre: ";
		$nombre = trim(fgets(STDIN));
		if (feof(STDIN))
			exit();
		if (is_numeric($nombre))
		{
			if (substr($nombre, -1) % 2 == 0)
				echo "Le chiffre {$nombre} est Pair\n";
			else
				echo "Le chiffre {$nombre} est Impair\n";
		}
		else {
			echo "'{$nombre}' n'est pas un chiffre\n";
		}
	}
 ?>
