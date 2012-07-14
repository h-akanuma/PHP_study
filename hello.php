<?php

abstract class MyData {
	public $name;
	abstract static public function createData();
}

interface MyDataOutputable {
	public function writeData();
	public function getLabel();
}

class FamilyData extends MyData implements MyDataOutputable {
	public $age = 0;
	public $birth = "";

	function __construct($name, $age, $birth) {
		$this->name = $name;
		$this->age = $age;
		$this->birth = $birth;
	}

	function writeData() {
		echo "[" . $this->name . "]\n";
		echo "年齢：" . $this->age . "\n";
		echo "誕生日：" . $this->birth . "\n\n";
	}

	function getLabel() {
		return $this->name . " [家族]";
	}

	static public function createData() {
		echo "名前を入力：";
		$a = trim(fgets(STDIN));
		echo "年齢を入力：";
		$b = trim(fgets(STDIN));
		echo "誕生日を入力：";
		$c = trim(fgets(STDIN));
		$obj = new FamilyData($a, $b, $c);
		return $obj;
	}
}

class PersonalData extends MyData implements MyDataOutputable {
	public $mail = "";
	public $tel = "";

	function __construct($name, $mail, $tel) {
		$this->name = $name;
		$this->mail = $mail;
		$this->tel = $tel;
	}

	function writeData() {
		echo "[" . $this->name . "]\n";
		echo "メアド：" . $this->mail . "\n";
		echo "電話 ：" . $this->tel . "\n\n";
	}

	function getLabel() {
		return $this->name . " [個人]";
	}

	static public function createData() {
		echo "名前を入力：";
		$a = trim(fgets(STDIN));
		echo "メールアドレスを入力：";
		$b = trim(fgets(STDIN));
		echo "電話番号を入力：";
		$c = trim(fgets(STDIN));
		$obj = new PersonalData($a, $b, $c);
		return $obj;
	}
}

class BusinessData extends MyData implements MyDataOutputable {
	public $corp = "";
	public $post = "";
	public $tel = "";

	function __construct ($name, $corp, $post, $tel) {
		$this->name = $name;
		$this->corp = $corp;
		$this->post = $post;
		$this->tel = $tel;
	}

	function writeData() {
		echo "[" . $this->name . "@" . $this->corp . "]\n";
		echo "POST: " . $this->post . "\n";
		echo "TEL : " . $this->tel . "\n\n";
	}

	function getLabel() {
		return $this->name . " [仕事]";
	}

	static public function createData() {
		echo "名前を入力：";
		$a = trim(fgets(STDIN));
		echo "会社名を入力：";
		$b = trim(fgets(STDIN));
		echo "所属部署を入力：";
		$c = trim(fgets(STDIN));
		echo "電話番号を入力：";
		$d = trim(fgets(STDIN));
		$obj = new BusinessData($a, $b, $c, $d);
		return $obj;
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
			echo "(f)ind, (i)nput, (l)ist, (d)elete, (q)uit : ";
			$a = trim(fgets(STDIN));
			switch($a){
				case 'f':
					echo "検索テキストを入力：";
					$a = trim(fgets(STDIN));
					$this->findIt($a);
					break;
				case 'i':
					echo "タイプを入力[(f)amily, (p)ersonal, (b)usiness]: ";
					$a = trim(fgets(STDIN));
					$this->inputData($a);
					break;
				case 'l':
					$this->writeList();
					break;
				case 'd':
					echo "削除する番号を入力j：";
					$a = trim(fgets(STDIN));
					$this->deleteIt($a);
					break;
				case 'q':
					echo "終了します。";
					return;
					break;
			}
			echo "\n";
		}
	}

	function inputData($type) {
		switch($type) {
			case 'f':
				array_push($this->data, FamilyData::createData());
				break;
			case 'p':
				array_push($this->data, PersonalData::createData());
				break;
			case 'b':
				array_push($this->data, BusinessData::createData());
				break;
		}
	}

	function findIt($fstr) {
		$flg = false;
		$result = "";
		for($i = 0; $i < count($this->data); $i++) {
			$obj = $this->data[$i];
			if (strpos(' ' . $obj->name, $fstr) != null) {
				$flg = true;
				echo $i . ":";
				$obj->writeData();
			}
		}
		if ($flg == false) {
			echo "データが見つかりませんでした。";
		}
	}

	function deleteIt($n) {
		if ($n < 0) { return; }
		if ($n >= count($this->data)) { return; }
		array_splice($this->data, $n, 1);
	}

	function writeList() {
		for ($i = 0; $i < count($this->data); $i++) {
			$obj = $this->data[$i];
			echo $i . " " . $obj->getLabel() . "\n";
		}
		echo "\n";
	}
}

new MyDataContainer();

?>
