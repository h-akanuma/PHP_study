<?php

echo "日付を入力(yyyy,mm,dd): ";
$a = explode(',', trim(fgets(STDIN)));
echo "タイムスタンプ：" . mktime(0, 0, 0, $a[1], $a[2], $a[0]);

?>
