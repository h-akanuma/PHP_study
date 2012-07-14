<?php

function explodeNow($str) {
	$arr = explode (" ", $str);
	for ($i = 0; $i < count($arr); $i++) {
		echo $i . ": " . $arr[$i] . "\n";
	}
}

echo "テキストを入力：";
$a = trim(fgets(STDIN));
explodeNow($a);

?>

