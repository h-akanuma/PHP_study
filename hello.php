<?php

function sortArr($arr) {
	sort ($arr, SORT_NUMERIC);
	for ($i = 0; $i < count($arr); $i++) {
		echo ($i + 1) . ": " . $arr[$i] . "\n";
	}
}

echo "項目を入力（カンマで区切って記述）：";
$a = trim(fgets(STDIN));
sortArr(explode(",", $a));

?>
