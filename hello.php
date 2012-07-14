<?php

echo "テキストを入力：";
$a = trim(fgets(STDIN));
echo mb_strlen($a, 'utf-8') . "文字あります。";

?>

