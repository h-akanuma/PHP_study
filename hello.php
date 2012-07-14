<?php

function showInfo($path) {
	echo "Path: " . realpath($path) . "\n";
	echo "Type: " . filetype($path) . "\nSize: " . filesize($path) . "\n";
	echo "Modified: " . date('Y-m-d H:i:s', filemtime($path)) . "\nAccessed: " . date('Y-m-d H:i:s', fileatime($path));
}

echo "ファイル名を入力：";
$a = trim(fgets(STDIN));
showInfo($a);

?>
