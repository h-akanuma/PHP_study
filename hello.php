<?php

function change($str, $k) {
	if ($k == 'u') return strtoupper($str);
	if ($k == 'l') return strtolower($str);
	if ($k == 'w') return ucwords($str);
}

echo "テキストを入力：";
$a = trim(fgets(STDIN));
echo "変換キーを入力(u, l, w): ";
$b = trim(fgets(STDIN));
echo "[変換済み]\n" . change($a, $b);

?>

