<?php

function calculateGrade(array $grades){
    $total = array_sum($grades);
    $average = $total / count($grades);

    if($average < 60){
        echo "F";
    }
    elseif($average <70 && $average > 60){
        echo "D";
    }
    elseif($average <80 && $average > 70){
        echo "C";
    }
    elseif($average <90 && $average > 80){
        echo "B";
    }
    elseif($average <100 && $average > 90){
        echo "A";
    }
}

$grades=[90, 90, 89, 99, 88, 87, 98];
calculateGrade($grades);
/*
The Grade Calculator Exercise By Asem Al-Zaghal
*/
?>