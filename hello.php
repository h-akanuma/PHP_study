<?php

echo "日付を入力(yyyy-mm-dd): ";
$a = trim(fgets(STDIN));
echo "タイムスタンプ：" . strtotime($a);

?>
