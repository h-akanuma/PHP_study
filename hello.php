<?php

function addToXMLData($root, $name, $mail, $tel) {
	$obj = $root->addChild('data');
	$obj->addChild('name', mb_convert_encoding($name, 'utf-8', 'utf-8'));
	$obj->addChild('mail', mb_convert_encoding($mail, 'utf-8', 'utf-8'));
	$obj->addChild('tel', mb_convert_encoding($tel, 'utf-8', 'utf-8'));
}

function saveXMLData($name, $mail, $tel) {
	$root = simplexml_load_file('data.xml');
	addToXMLData($root, $name, $mail, $tel);
	$root->asXML('data.xml');
}

echo "名前を入力：";
$name = trim(fgets(STDIN));
echo "メールアドレスを入力：";
$mail = trim(fgets(STDIN));
echo "電話番号を入力：";
$tel = trim(fgets(STDIN));
saveXMLData($name, $mail, $tel);

?>
