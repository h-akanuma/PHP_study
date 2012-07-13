<?php

$data = array(
		'tuyano' => 'tuyano@mac.com',
		'taro' => 'taro@yamada.com',
		'hanako' => 'hanako@flower.jp'
);

$flg = false;

echo "名前を入力：";
$a = trim(fgets(STDIN));
if($data[$a] == null) {
	echo "データが見つかりませんでした。";
} else {
	echo $a . ": " . $data[$a];
}

?>
