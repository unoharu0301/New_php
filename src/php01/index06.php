<?php
for ($i = 0; $i < 6; $i++){
    echo $i;
}
echo "<br />";


for ($i=0; $i<=5; $i++){
    echo $i*2 . "<br />";
}

for ($i=2; $i<=10; $i++){
    if ($i % 2 == 0){
        echo $i;
    }else{
        echo "<br />";
    }
}

echo "<br />";

$i = 0;
while ($i < 3) {
    echo "i=". $i."<br />";
    $i +=1;
}

$count = 0;
while ($count <20) {
    ++$count;
    echo $count;
    echo "<br />";
}

echo "<br />";

$count = 0;
while ($count <=100) {
    if($count === 20){
        break;
    }
    if($count % 3 == 0){
        $count++;
        continue;
    }
    echo $count."<br />";
    $count++;
}

echo "<br />";

$num = 0;
do {
    echo "num=".$num."<br />";
    $num++;
}while($num<3);

echo "<br />";

for ($num=0; $num<=50; $num++){
    if ($num % 15 == 0){
        echo "FizzBuzz"."<br />";
    }elseif ($num % 5 == 0){
        echo "Buzz"."<br />";
    }elseif ($num % 3 == 0){
        echo "Fizz"."<br />";
    }else{
        echo $num . "<br />";
    }
}