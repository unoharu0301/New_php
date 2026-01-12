<?php
$people = array("Taro", "Jiro", "Saburo");

var_dump($people);
echo "<br />";

$people2 = array(
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo",
);

echo "<br />";
var_dump($people2);

echo "<br />";
echo $people2["person2"];

echo "<br />";
$people3 = array("Taro", "Jiro", "Saburo");

foreach ($people3 as $person) {
    echo $person;
    echo "<br />";
}

echo "<br />";

$people3 = [
    [
        "name" => "Taro",
        "age" => "25",
        "gender" => "men",
    ],
    [
        "name" => "Jiro",
        "age" => "20",
        "gender" => "men",
    ],
    [
        "name" => "hanako",
        "age" => "16",
        "gender" => "women",
    ],
];

foreach ($people3 as $person ) {
    echo $person["name"] ."(". $person["age"] . "歳" . $person["gender"] . ")" . "<br />";
}