<?php

$array1 = [1, 2, 3, 4, 5];

$location = 4;
$newItem = 489;

array_splice($array1, $location -1, 0, $newItem);

for($i = 0; $i < count($array1); $i++){
    echo $array1[$i].", ";
}
/*
The Adding to Array at any Position Exercises By Asem Al-Zaghal
*/
?>