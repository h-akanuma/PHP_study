<?php

function getAddDate($n) {
	$di = new DateInterval("P{$n}D");
	$d = new DateTime("now");
	return $d->add($di);
}

echo "日数を入力：";
$a = trim(fgets(STDIN));
$d = getAddDate($a);
echo $d->format("Y-n-j");

?>
