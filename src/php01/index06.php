<?php
// for文：繰り返し処理：for ($i = 初期値; $i <= 回数; 増減式)
for ($i = 1; $i <=5; $i++){
    echo $i*2;
    echo "<br>";
}
for ($i = 2; $i <= 10; $i += 2){
    echo $i;
    echo "<br>";
}

// while文：繰り返し処理(カウンターの記述がない)
// while (条件) {
//      真の時に実行
//      繰り返しの処理の中で変数の値を変化させる式 } 
// ループから抜ける場合：break, 処理をスキップ：continue
$count = 0;
while ($count < 20){
    $count ++;
    echo $count."<br>";
}
$n = 0;
while ($n <10) {
    if ($n == 5) {
        break;
    }
    echo $n;
    $n++;
}
echo "<br>";
$c = 0;
while ($c<10){
    if ($c == 5) {
        $c++;
        continue;
        // $cが5の時、$iに1を足す処理をし、スキップ
    }
    echo $c;
    $c++;
}
echo "<br>";
// Q
$count = 0;
while ($count <= 100) {
    if ($count === 20) {
        break;
    } elseif($count % 3 === 0) {
        $count++;
        continue;
    } else {
        echo $count."<br>";
    }
    $count++;
}

// do...while文:必ず１回は処理をする点がwhile分とは異なる
$num = 0;
do {
    echo "num = ".$num."<br>";
    $num++;
} while ($num < 3);

// FizzBuzz問題
for ($number = 1; $number <= 50; $number++) {
    if ($number%3==0 && $number%5==0) {
        echo "FizzBuzz";
    } elseif ($number%3==0) {
        echo "Fizz";
    } elseif ($number%5==0) {
        echo "Buzz";
    } else {
        echo $number;
    }
}
// 二重ループのパターン生成問題
$size = 6;
// 外側のループ
for ($d = 1; $d <= $size; $d++) {
    // 内側のループ
    for ($e = 1; $e <= $size; $e++){
        echo "●";
    }
    // 各行の処理が終わったら改行する指示を忘れずに
    echo "<br>";
}