<?php
// if文:条件式がtrue/falseによる判定
$a = 7;
if ($a === 5){
    echo "\$aは5です";
    // "\"はoptionキー＋¥：これで変数を文字列として表示できる
} elseif($a === 7) {
    echo "\$aは7です";
} else {
    echo "\$aは5と7以外です";
}
echo "<br>";

// switch文：値がtrue/falseによる判定、break;の記述必須
$people = "Saburo";
switch ($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
    default:
        break;
    // default:は記述することが強く推奨されている
}
echo "<br>";

// 三項演算子 $result = (条件式) ? "TRUE時の値" : "FALSE時の値";
$b = 7;
$c = ($b > 5) ? "TRUE" : "FALSE";
echo $c;