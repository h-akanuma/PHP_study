<?php

function replace ($str, $f, $r) {
	$n = mb_strpos($str, $f, 0, 'utf-8');
	$s = mb_substr($str, 0, $n, 'utf-8') 
		 . $r 
		 . mb_substr(
				$str, 
				$n + mb_strlen($f, 'utf-8'), 
				mb_strlen($str, 'utf-8'), 
				'utf-8'
		   );
	return $s;
}

echo "テキストを入力：";
$a = trim(fgets(STDIN));
echo "検索テキストを入力：";
$b = trim(fgets(STDIN));
echo "置換テキストを入力：";
$c = trim(fgets(STDIN));
echo "[置換済みテキスト]\n" . replace($a, $b, $c);

?>

