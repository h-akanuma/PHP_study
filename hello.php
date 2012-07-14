<?php

function addToCsv($name, $mail, $tel) {
	$f = @fopen('data.csv', 'ab') or exit('ファイルが開けません。');
	fputcsv($f, array($name, $mail, $tel));
	fclose($f);
}

echo "名前を入力:";
$a = trim(fgets(STDIN));
echo "メールアドレスを入力：";
$b = trim(fgets(STDIN));
echo "電話番号を入力：";
$c = trim(fgets(STDIN));
addToCsv($a, $b, $c);

?>
