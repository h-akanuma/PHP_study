<?php

echo "整数を入力：";
$a = trim(fgets(STDIN));
for ($i = 0; $i < 100; $i++) echo rand(0, $a) . " ";

?>
