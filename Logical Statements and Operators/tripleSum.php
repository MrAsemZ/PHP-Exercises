<?php
function calculateSum($input1, $input2){
    if($input1 == $input2){
        $tripleSum = ($input1 +$input2)*3;
        echo "( ".$input1. " + " .$input2." ) * 3 = " . $tripleSum;
    }
    else{
        $sum = $input1 + $input2;
        echo "( ".$input1. " + " .$input2." ) = " . $sum;

    }
}
calculateSum(10, 10);
/*
The Triple Sum Exercise By Asem Al-Zaghal
*/
?>