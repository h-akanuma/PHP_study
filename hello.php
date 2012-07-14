<?php

$data = array();
MyDataContainer::start();

class MyData {
	public $name = "";
	public $mail = "";
	public $tel = "";

	function __construct($name, $mail, $tel) {
		$this->name = $name;
		$this->mail = $mail;
		$this->tel = $tel;
	}

	function writeData() {
		echo "[" . $this->name . "]\n";
		echo "mail: " . $this->mail . "\n";
		echo "tel:  " . $this->tel . "\n\n";
	}
}

class MyDataContainer {

	static function start() {
		while(true) {
			echo "検索=1, 入力=2 : ";
			$a = trim(fgets(STDIN));
			switch($a) {
				case 1:
					echo "検索テキストを入力：";
					$a = trim(fgets(STDIN));
					MyDataContainer::findIt($a);
					break;
				case 2:
					MyDataContainer::addData();
					break;
				default:
					exit(0);
			}
			echo "\n";
		}
	}

	static function addData() {
		global $data;
		echo "名前を入力：";
		$a = trim(fgets(STDIN));
		echo "メールアドレスを入力：";
		$b = trim(fgets(STDIN));
		echo "電話番号を入力：";
		$c = trim(fgets(STDIN));
		$obj = new MyData($a, $b, $c);
		array_push($data, $obj);
	}

	static function findIt($fstr) {
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
}

?>
