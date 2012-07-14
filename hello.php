<?php

new MyDataContainer();

abstract class MyData {
	public $name;
	abstract function writeData();
}

class PersonalData extends MyData {
	public $age = 0;
	public $address = "";

	function __construct($name, $age, $address) {
		$this->name = $name;
		$this->age = $age;
		$this->address = $address;
	}

	function writeData() {
		echo "[" . $this->name . "]\n";
		echo "年齢: " . $this->age . "\n";
		echo "住所:  " . $this->address . "\n\n";
	}
}

class BusinessData extends MyData {
	public $corp = "";
	public $mail = "";
	public $tel = "";

	function __construct($name, $corp, $mail, $tel) {
		$this->name = $name;
		$this->corp = $corp;
		$this->mail = $mail;
		$this->tel = $tel;
	}

	function writeData() {
		echo "[" . $this->name . "@" . $this->corp. "]\n";
		echo "MAIL: " . $this->mail . "\n";
		echo "TEL:  " . $this->tel . "\n\n";
	}
}

class MyDataContainer {
	public $data;

	function __construct() {
		$this->data = array();
		$this->start();
	}

	function start() {
		while(true) {
			echo "検索=1, 入力(p)=2, 入力(b)=3 : ";
			$a = trim(fgets(STDIN));
			switch($a) {
				case 1:
					echo "検索テキストを入力：";
					$a = trim(fgets(STDIN));
					MyDataContainer::findIt($a);
					break;
				case 2:
					$this->addPData();
					break;
				case 3:
					$this->addBData();
					break;
				default:
					exit(0);
			}
			echo "\n";
		}
	}

	function addPData() {
		echo "名前を入力：";
		$a = trim(fgets(STDIN));
		echo "年齢を入力：";
		$b = trim(fgets(STDIN));
		echo "住所を入力：";
		$c = trim(fgets(STDIN));
		$obj = new PersonalData($a, $b, $c);
		array_push($this->data, $obj);
	}

	function addBData() {
		echo "名前を入力：";
		$a = trim(fgets(STDIN));
		echo "会社名を入力：";
		$b = trim(fgets(STDIN));
		echo "メールアドレスを入力：";
		$c = trim(fgets(STDIN));
		echo "電話番号を入力：";
		$d = trim(fgets(STDIN));
		$obj = new BusinessData($a, $b, $c, $d);
		array_push($this->data, $obj);
	}

	function findIt($fstr) {
		$flg = false;
		$result = "";
		foreach($this->data as $obj) {
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
