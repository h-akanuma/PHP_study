<?php

echo "日数を入力：";
$d = trim(fgets(STDIN));
echo "今日から" . $d . "日後: " . date('Y/n/j', time() + 60 * 60 * 24 * $d);

?>
