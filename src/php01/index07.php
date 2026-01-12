<?php
function outputNumber($a){
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);
echo "<br />";

function text($num1,$num2){
    $value = $num1 + $num2;
    return $value;
}

$total = text(3,8);
echo $total;
echo "<br />";

function text2($num1,$num2){
    $value = $num1 - $num2;
    return $value;
}

$sa = text2(11,6);
echo $sa;




echo "<br />";

function pass($score1, $score2, $score3,){
    $total = $score1 + $score2 + $score3;
    return $total;
}

$judge = pass(39,302,20);

if($judge > 210){
    echo "合格点は". $judge ."なので合格です";
}else{
    echo "合格点は". $judge ."なので不合格です";
}

echo "<br />";

function pass2($score1, $score2, $score3,){
    $total = $score1 + $score2 + $score3;
    if($total > 210){
    echo "合格点は". $total ."なので合格です";
    }else{
    echo "合格点は". $total ."なので不合格です";
    }
}
echo pass2(80,60,90);

echo "<br />";

function shape($edge, $under, $height, $top,){
    if($edge === 3){
        $area = $under * $height /2;
        echo "三角形、面積は".$area;
    }elseif($edge === 4){
        $area = $under * $height ;
        echo "四角形、面積は".$area;
    }else{
        $area = ($under + $top) * $height /2;
        echo "台形、面積は".$area;
    }
}

echo shape(5,8,6,5);
