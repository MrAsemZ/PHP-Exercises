<?php

function checkLowercase($string) {

    if ($string == strtolower($string)) {
        echo "Your String is Ok";
    } else {
        echo "Your String is Not Ok";
    }

}

$string = "remove";

checkLowercase($string);
/*
The Lowercase Check Exercise By Asem Al-Zaghal
*/
?>