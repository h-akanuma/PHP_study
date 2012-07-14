<?php

function sortArr($arr) {
	asort($arr, SORT_STRING);
	foreach($arr as $key => $value) {
		echo $key . ": " . $value . "\n";
	}
}

echo "項目を入力（カンマで区切って記述）：";
$a = trim(fgets(STDIN));
sortArr(explode(",", $a));

?>
