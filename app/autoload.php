<?php

spl_autoload_register(function ($class) {
  // All Folder To Search For Classes Used in 'index.php'.
	$paths = [
		'app/',
		'controllers/',
		'models/',
		'database/',
	];

  // Loop On Folders To Find The Used Classes To Include.
	foreach ($paths as $path) 
  {
		$file = "{$path}{$class}.php";

		if (file_exists($file))
    {
			require $file;
			break;
		}
	}
});
