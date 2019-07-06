<?php 

$num = 3;

function f1($s) {
	if ($s == 1) {
		return 1;
	}
	return $s*f1($s - 1);
}

echo f1($num) . "\n";

 ?>