<?php

echo "日付を入力(yyyy-mm-dd): ";
$d = strtotime(trim(fgets(STDIN)));
echo ceil(($d - time()) / (60 * 60 * 24)) . "日";

?>
