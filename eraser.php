<?php

foreach (glob('*.*') as $file) {

	if (stristr($file, $argv[1]))
			unlink($file);
}

echo "files deleted \r\n";

?>