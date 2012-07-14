<?php

function saveText($str) {
	$f = @fopen('save.txt', 'ab') or exit('ファイルアクセスに失敗しました。');
	fputs($f, $str . "\n");
	fclose($f);
}

echo "テキストを入力：";
$a = trim(fgets(STDIN));
saveText($a);
echo "\n";
readfile('save.txt');

?>
