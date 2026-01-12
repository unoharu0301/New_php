<?php
$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$goods = htmlspecialchars($_POST["goods"],ENT_QUOTES);
$number = htmlspecialchars($_POST["number"],ENT_QUOTES);

echo "私の名前は" . $name . "です" . "<br />";
echo "ご注文の商品は" . $goods . "<br />";
echo "注文数は" . $number;