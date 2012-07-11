<?php

echo "整数を入力：";
$a = trim(fgets(STDIN));
$b = $a % 2;

if ($b == 0) {
	echo $a . "は、偶数です。";
} else {
	echo $a . "は、奇数です。";
}

?>

