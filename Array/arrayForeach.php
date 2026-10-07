<?php

function convertToUpperCase($colors) {

    foreach ($colors as $color) {
        echo strtoupper($color) . "<br>";
    }

}

$colors = array("red", "blue", "white", "yellow");

convertToUpperCase($colors);
/*
The Array Uppercase Exercise By Asem Al-Zaghal
*/
?>