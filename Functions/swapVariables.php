<?php

function swapVariables(&$x, &$y) {

    $temp = $x;
    $x = $y;
    $y = $temp;

}

$x = 12;
$y = 10;

swapVariables($x, $y);

echo "y = " . $y . "<br>";
echo "x = " . $x;
/*
The Variables Swapping Exercise By Asem Al-Zaghal
*/
?>