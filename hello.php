<?php

function changeKana($str, $k) {
	$str2 = mb_convert_kana($str, $k, 'utf-8');
	return $str2;
}

echo "テキストを入力：";
$a = trim(fgets(STDIN));
echo "[変換済み]\n" . changeKana($a, 'cCH');

?>

