<?php
$a = 15;
$b = 3;

$answer1 = $a - $b;

echo $answer1;
echo "<br />";

$a = 8;
if ( $a === 5 ){
    echo "aは5です";
}elseif ( $a === 7 ){
    echo "aは7です";
}else{
    echo "aは5か7ではない";
}
echo "<br />";

$people = "jiro";

switch ($people) {
    case "ichiro":
        echo "一郎です";
        break;
    case "jiro":
        echo "二郎です";
        break;
    case "saburo":
        echo "三郎です";
        break;
    default:
        echo "誰でもない";
        break;
}
echo "<br />";

$a = 7;
$result = ($a>5) ? "５より大きい":"５より小さい";
echo $result;