<?php
// 配列
$people = array('Taro','Jiro','Saburo');
var_dump($people);
// var_dump」関数は、与えられた変数の値を詳細に出力します。 出力結果には、配列の要素数と各要素のデータ型、値、値の長さ（文字列の場合）が含まれます。 これにより、プログラムのデバッグに役立てることができます。
echo "<br>";


// 連想配列：それぞれの値にラベルをつける感じ
$people2 = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
var_dump($people2);
echo "<br>";
// 別の入力方法
$people3 = [
    'person1' => 'taro',
    'person2' => 'jiro',
];
echo $people3 ['person1'];
echo "<br>";


// 多次元配列:配列の中に配列が入ってるもの
$people4 = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
];
echo $people4[0]["last_name"];
echo "<br>";


// foreach文：配列の要素の数だけ処理が繰り返される
$people5 = array('Taro', 'Jiro', 'Saburo');
foreach ($people5 as $person) {
    echo $person;
    echo "<br>";
}
// デフォルトでキーに添字が当てられる例
foreach ($people2 as $person => $name) {
    print $person."は".$name."です"."<br>";
}

$people6 = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['Hanako', 16, 'women']
];
foreach ($people6 as $person) {
    echo $person[0]."(".$person[1]."歳".$person[2].")";
    echo "<br>";
}