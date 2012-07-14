<?php

function showLines($f) {
	$lines = @file($f) or exit('ファイルが読み込めませんでした。');
	for ($i = 0; $i < count($lines); $i++) {
		echo ($i + 1) . ": " . $lines[$i];
	}
}

echo "ファイル名を入力：";
$a = trim(fgets(STDIN));
showLines($a);

?>
