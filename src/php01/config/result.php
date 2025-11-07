<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$select = htmlspecialchars($_POST['select'], ENT_QUOTES);
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);
echo "私の名前は、".$name."<br>";
echo "ご希望の商品は、".$select."<br>";
echo "注文数は、".$quantity."<br>";