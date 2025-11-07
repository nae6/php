<?php
// FizzBuzz練習問題
// 見てわかりやすいか
// コードが短い方がいい
// 見分けがつき易いようにスペースを活用する
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "FizzBuzz";
        echo "<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
        echo "<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
        echo "<br>";
    } else {
        echo $i;
        echo "<br>";
    }
}