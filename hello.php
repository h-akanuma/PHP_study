<?php

function listFiles($path) {
	@$dir = opendir($path) or exit("ディレクトリが開けません。");
	while($f = readdir($dir)) echo $f . "\n";
	closedir($dir);
}

echo "ディレクトリのパスを入力：";
$a = trim(fgets(STDIN));
listFiles($a);

?>
