<?php

$data = array(
		'tuyano' => 'tuyano@mac.com',
		'taro' => 'taro@yamada.com',
		'hanako' => 'hanako@flower.jp'
);

while(true) {
	echo "検索=1, 入力=2 :";
	$a = trim(fgets(STDIN));
	switch($a) {
		case 1:
            echo "検索テキストを入力：";
			$a = trim(fgets(STDIN));
			$res = findIt($a);
			echo $res;
			break;
		case 2:
			addData();
			break;
		default:
			exit(0);
	}
	echo "\n";
}

function addData() {
	global $data;
	echo "名前を入力：";
	$a = trim(fgets(STDIN));
	echo "メールアドレスを入力：";
	$b = trim(fgets(STDIN));
	$data[$a] = $b;
}

function findIt($fstr) {
	global $data;
	$flg = false;
	$result = "";
	foreach ($data as $key => $val) {
		if (strpos(' ' . $key, $fstr) != null) {
			$flg = true;
			$result .= $key . ": " . $val . "\n";
		}
	}
	if ($flg == false) {
		$result = "データが見つかりませんでした。";
	}
	return $result;
}

?>
