<?php
// 関数：
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 4);
echo $total;
// returnは結果を返す役割がある。ないと結果６は戻ってこないから表示されない
echo "<br>";

function sum($score1, $score2, $score3)
{
    $SUM = $score1 + $score2 + $score3;
    if ($SUM > 210) {
        echo "合計は".$SUM."点なので合格です";
    } else {
        echo "合計は".$SUM."点なので不合格です";
    }
}
echo (sum(80, 60, 90));
// 上記のように関数を()で囲む必要はなく、()がない方が推奨される
// 関数 sum は内部で echo を使って直接出力を行っているにもかかわらず、その外側で再度 echo しようとしていることに論理的問題がある。
echo "<br>";

// 三角形・四角形・台形の面積を求める関数を定義
function triangle($a, $b)
{
    $tArea = $a * $b / 2;
    return $tArea;
}
function square($a, $b)
{
    $sArea = $a * $b;
    return $sArea;
}
function trapezoid ($a, $b, $c)
{
    $zArea = ($a + $c) * $b;
    return $zArea;
}
echo triangle(4,5);
echo "<br>";
echo square(4,5);
echo "<br>";
echo trapezoid(4,5,2);