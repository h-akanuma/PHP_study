<?php

$count = 0:
do {
	echo "整数を入力（空で次へ進む）:";
	$a = trim(fgets(STDIN));
	$arr[$count++] = $a
} while ($a != "");

$total = 0;
foreach ($arr as $item) {
	$total += $item;
}

echo("total: " . $total);

?>
