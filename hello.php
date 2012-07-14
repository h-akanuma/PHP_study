<?php

function findXMLData($root, $str) {
	foreach ($root->children() as $data) {
		if (mb_convert_encoding($data->name, 'utf-8', 'utf-8') == $str) {
			echo(mb_convert_encoding($data->name . ", " . $data->mail . ", " . $data->tel, 'utf-8', 'utf-8') . "\n");
		}
	}
}

echo "検索テキストを入力：";
$name = trim(fgets(STDIN));
$root = simplexml_load_file('data.xml');
findXMLData($root, $name);

?>
