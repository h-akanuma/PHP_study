<?php

echo "フォルダ名を入力：";
$a = trim(fgets(STDIN));
mkdir(getcwd() . "/" . $a);

?>
