<?php

echo "金額を入力：";
$a = trim(fgets(STDIN));
$b = $a * 1.05;

echo $a . "円の税込み金額は、" . $b . "円です。";

?>

