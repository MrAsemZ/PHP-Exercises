<?php
function isEligible($age){
    if ($age >=18){
        echo "You are eligible to Vote.";
    }
    else{
        echo "You Can't Vote Since you are under 18.";
    }
}

isEligible(17);

/*
The Age Check Exercise By Asem Al-Zaghal
*/
?>