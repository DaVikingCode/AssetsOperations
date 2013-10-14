<?php

foreach (glob('*.*') as $file) {

	$newName = str_replace($argv[1], $argv[2], $file);

	rename($file, $newName);
}

echo "files renamed \r\n";

?>