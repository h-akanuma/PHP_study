<?php

$root = simplexml_load_file('data.xml');
foreach ($root->children() as $data) {
	echo(mb_convert_encoding($data->name . "," . $data->mail . "," . $data->tel, 'utf-8', 'utf-8') . "\n");
}

?>
