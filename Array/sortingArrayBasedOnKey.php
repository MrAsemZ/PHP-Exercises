<?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c
" => "apple");


ksort($fruits, SORT_STRING);

print_r($fruits);
?>