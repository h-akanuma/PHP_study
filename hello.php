<?php

echo "フォーマットを入力：";
$d = new DateTime("now");
echo $d->format(trim(fgets(STDIN)));

?>
