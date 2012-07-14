<?php

function replace ($str, $f, $r) {
	$str2 = str_replace($f, $r, $str);
	return $str2;
}

echo "テキストを入力：";
$a = trim(fgets(STDIN));
echo "検索テキストを入力：";
$b = trim(fgets(STDIN));
echo "置換テキストを入力：";
$c = trim(fgets(STDIN));
echo "[置換済みテキスト]\n" . replace($a, $b, $c);

?>

