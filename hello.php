<?php

echo "項目を入力（カンマで区切って記述）：";
$arr = explode(",", trim(fgets(STDIN)));
echo array_search('PHP', $arr);

?>
