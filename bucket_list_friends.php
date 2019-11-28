<?php
echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;

$number = readline(">");




if (is_numeric($number)){

}else {

    exit ($number . " " . "is geen getal");

}

$name = array();

for($i=0; $i<$number; $i++) {

    echo "Wat is jouw naam?" . PHP_EOL;

    $friend = readline(">");

    array_push ($name, $friend);

}

$dream = array();

for($i=0; $i<$number; $i++){

    echo "Wat is jouw droom?" . PHP_EOL;

    $droom = readline(">");

    array_push ($dream, $droom);

}

for($i=0; $i<$number; $i++){

    echo ($name[$i] ." heeft dit als droom: " .$dream[$i]) . PHP_EOL;

}