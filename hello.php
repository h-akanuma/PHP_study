<?php

function implodeNow($arr) {
	$str = implode (", ", $arr);
	echo $str . "。";
}

$arr = array();
while(true) {
	echo "テキストを入力：";
	$a = trim(fgets(STDIN));
	if ($a == "") { break; }
	array_push($arr, $a);
}
implodeNow($arr);

?>

