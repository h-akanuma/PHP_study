<?php

$data = array();

while(true) {
	echo "検索=1, 入力=2 : ";
	$a = trim(fgets(STDIN));
	switch($a) {
		case 1:
			echo "検索テキストを入力：";
			$a = trim(fgets(STDIN));
			findIt($a);
			break;
		case 2:
			addData();
			break;
		default:
			exit(0);
	}
}

class MyData {
	public $name = "";
	public $mail = "";
	public $tel = "";

	function writeData() {
		echo $this->name . "\n";
		echo "mail: " . $this->mail . "\n";
		echo "tel:  " . $this->tel . "\n\n";
	}
}

function addData() {
	global $data;
	echo "名前を入力：";
	$a = trim(fgets(STDIN));
	echo "メールアドレスを入力：";
	$b = trim(fgets(STDIN));
	echo "電話番号を入力：";
	$c = trim(fgets(STDIN));
	$obj = new MyData();
	$obj->name = $a;
	$obj->mail = $b;
	$obj->tel = $c;
	array_push($data, $obj);
}

function findIt($fstr) {
	global $data;
	$flg = false;
	$result = "";
	foreach($data as $obj) {
		if (strpos(' ' . $obj->name, $fstr) != null) {
			$flg = true;
			$obj->writeData();
		}
	}
	if ($flg == false) {
		echo "データが見つかりませんでした。";
	}
}

?>
