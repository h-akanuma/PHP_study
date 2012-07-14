<?php

function findCsv($str) {
	$f = @fopen('data.csv', 'rb') or exit('ファイルが開けません。');
	while($data = fgetcsv($f, 1024)) if ($data[0] == $str) print_r ($data);
	fclose($f);
}

echo "検索テキストを入力：";
$a = trim(fgets(STDIN));
findCsv($a);

?>
