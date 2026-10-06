<?php
function numberCheck($number){
    if ($number > 0){
        echo $number." Is a positive Number";
    }
    elseif($number == 0){
        echo $number." Is a Zero";
    }
    else{
        echo $number." Is a negative Number";
    }

}
numberCheck(0);
/*
The Number Check Exercise By Asem Al-Zaghal
*/
?>