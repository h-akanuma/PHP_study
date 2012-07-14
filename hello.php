<?php

function showText($f) {
	$f = @fopen($f, 'rb') or exit('ファイルが読み込めませんでした。');
	while (!feof($f)) echo fgets($f, 21) . "\n";
	fclose($f);
}

echo "ファイル名を入力：";
$a = trim(fgets(STDIN));
showText($a);

?>
