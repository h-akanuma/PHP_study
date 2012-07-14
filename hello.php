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
			$flg = false;
			echo "名前を入力：";
			$a = trim(fgets(STDIN));
			foreach($data as $key => $val) {
				if (strpos(' ' . $key , $a) != null) {
					$flg = true;
					echo $key . ": " . $val . "\n";
				}
			}
			if ($flg == false) {
				echo "データが見つかりませんでした。";
			}
			break;
		case 2:
			echo "検索文字を入力：";
			$a = trim(fgets(STDIN));
			echo "メールアドレスを入力：";
			$b = trim(fgets(STDIN));
			$data[$a] = $b;
			break;
		default:
			exit(0);
	}
	echo "\n";
}

?>


?>
