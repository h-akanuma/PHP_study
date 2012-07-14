<?php

echo "ファイル名を入力：";
$a = trim(fgets(STDIN));
readfile($a);

?>
