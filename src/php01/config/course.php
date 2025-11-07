<?php
// データの受け取り
// POST
// $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
// print "会社名は".$company."ですね";
// データは$_POSTに格納される
// htmlspecialcharsは、フォームを利用したセキリュティの攻撃を防ぐためにエスケープ処理をするための関数

// GET
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は".$company."ですね";
// http://localhost/php01/course.php?company=株式会社estra&submit=送信する
// 上のアドレスは正式にはこうなる：http://localhost/php01/course.php?company=%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BEestra&submit=%E9%80%81%E4%BF%A1%E3%81%99%E3%82%8B
// GETで送信すると、送信データがURLnoファイル名の後ろに付加され、$_GETという変数に格納される
