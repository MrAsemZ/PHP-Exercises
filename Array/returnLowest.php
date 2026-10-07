<?php

$array1 = array(2, 0, 10, 12, 6);

$lowest = null;

foreach ($array1 as $number) {

    if ($number != 0) {

        if ($lowest === null || $number < $lowest) {
            $lowest = $number;
        }

    }
}

echo $lowest;
/*
The Lowest Number Return Exercise By Asem Al-Zaghal
*/
?>