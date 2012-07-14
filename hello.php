<?php

echo "テキストを入力：";
$a = trim(fgets(STDIN));
echo mb_strpos($a, 'PHP', 0, 'utf-8') . "文字目にPHPがあります。";

?>

