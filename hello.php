<?php

$data = array(
		'tuyano' => 'tuyano@mac.com',
		'taro' => 'taro@yamada.com',
		'hanako' => 'hanako@flower.jp'
);

$flg = false;

echo "名前を入力：";
$a = trim(fgets(STDIN));
foreach ($data as $key => $val) {
	if (strpos(' ' . $key, $a) != null) {
		$flg = true;
		echo $key . ": " . $val;
	}
}

if($flg == null) {
	echo "データが見つかりませんでした。";
}

?>
