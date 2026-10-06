<?php
function isLeapYear($year){
    if ($year % 4 == 0){
        if($year % 100 == 0){
            if($year % 400 == 0){
                echo "The Year " . $year . " Is A leap year!";

            }
            else{
            echo "The Year " . $year . " Is Not a leap year!";
            }

        }
        else{
        echo "The Year " . $year . " Is A leap year!";
        }
    }
    
    else{
    echo "The Year " . $year . " Is Not a leap year!";
    }
}
isLeapYear(2016);

/*
The Leap Year Exercise By Asem Al-Zaghal
*/
?>