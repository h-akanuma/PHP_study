<?php

function showCsv($fname) {
	$f = @fopen($fname, 'rb') or exit('ファイルが開けません。');
	while(!feof($f)) print_r(fgetcsv($f, 1024));
	fclose($f);
}

echo "ファイル名を入力：";
$a = trim(fgets(STDIN));
showCsv($a);

?>
