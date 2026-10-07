<?php

function convertToLowerCase($colors) {

    foreach ($colors as $color) {
        echo strtolower($color) . "<br>";
    }

}

$colors = array("red", "blue", "white", "yellow");

convertToLowerCase($colors);
/*
The Array LowerCase Exercise By Asem Al-Zaghal
*/
?>