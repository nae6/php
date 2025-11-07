<?php
$a = 20;
$b = 5;
$c = 10;
$d = 5;
$e = 10;

echo ($a > $b);
// ()は必須！！
echo "<br>";

echo ($a>10 && $a<30);
// PHPの演算子の優先順位は以下のようになっています。
// １：比較演算子 (>, <, >=, <=)
// ２：論理演算子 (&&, ||)
echo "<br>";

echo ++$e;
echo "<br>";
echo $c++;
echo "<br>";
echo --$b;
echo "<br>";
echo $d--;