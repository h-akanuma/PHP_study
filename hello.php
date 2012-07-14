<?php

echo "日時を入力：";
$a = trim(fgets(STDIN));
print_r(new DateTime($a));

?>
