<?php

function getDiffDate($str) {
	$d1 = new DateTime("now");
	$d2 = new DateTime($str);
	return $d1->diff($d2);
}

echo "日付を入力：";
$a = trim(fgets(STDIN));
$di = getDiffDate($a);
echo $di->format("%D day %H hours %I minutes.");

?>
