<?php

function isPrime($number) {

    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 7;

if (isPrime($number)) {
    echo $number . " is a prime number";
} else {
    echo $number . " is not a prime number";
}
/*
The Prime Number Exercise By Asem Al-Zaghal
*/
?>