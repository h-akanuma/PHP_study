<?php

$count = 0;
do {
	echo "整数を入力（空で次へ進む）：";
	$a = trim(fgets(STDIN));
	$arr[$count++] = $a;
} while ($a != "");
$total = 0;
for ($i = 0; $i < count($arr); $i++) {
	$total += $arr[$i];
}
echo "合計：" . $total;

?>

