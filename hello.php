<?php

echo "整数を入力：";
$a = trim(fgets(STDIN));
$result = false;
$n = 2;
while ($n <= $a / 2) {
	if ($a % $n == 0) {
		$result = true;
	}
	$n++;
}
if ($result) {
	echo $a . "は、素数じゃないです。";
} else {
	echo $a . "は、素数です！！";
}

?>

