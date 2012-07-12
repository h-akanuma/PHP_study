<?php

echo "血液型を大文字で入力：";
$a = trim(fgets(STDIN));
switch($a) {
	case "A":
		echo "あなたは、几帳面なしっかり者でしょう。";
		break;
	case "B":
		echo "あなたは、常識に縛られない自由人でしょう。";
		break;
	case "AB":
		echo "あなたは1つに割り切れない複雑な性格のようです。";
		break;
	case "O":
		echo "あなたは、おおらかで大人物の風格があります。";
		break;
	default:
		echo "あなたは、たぶん人間じゃないです。";
}

?>

