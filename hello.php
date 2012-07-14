<?php

echo "フォーマット(Y/y/m/n/d/j): ";
$a = trim(fgets(STDIN));
echo date($a, time());

?>
