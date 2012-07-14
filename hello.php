<?php

function countValues($arr) {
	$arr2 = array_count_values($arr);
	foreach($arr2 as $key => $value) {
		echo $key . ": " . $value . "\n";
	}
}

echo "項目を入力（カンマで区切って記述）：";
$a = trim(fgets(STDIN));
countValues(explode(",", $a));

?>
