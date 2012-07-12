<?php

echo "整数を入力：";
$a = trim(fgets(STDIN));
$result = false;
$n = (int)($a / 2);
for ($i = 2; $i <= $n; $i++) {
	if ($a % $i == 0) {
		$result = true;
	}
}
if ($result) {
	echo $a . "は、素数じゃないです。";
} else {
	echo $a . "は、素数です！！";
}

?>

