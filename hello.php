<?php

function setUnique($arr) {
	$arr2 = array_unique($arr);
	foreach($arr2 as $value) {
		echo $value . " ";
	}
}

echo "項目を入力（カンマで区切って記述）：";
$a = trim(fgets(STDIN));
setUnique(explode(",", $a));

?>
