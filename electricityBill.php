<?php
// Rules of Billing:
// a.  For first 50 units – 2.50 JOD/Unit 
// b.  For next 100 units – 5.00 JOD/Unit 
// c.  For next 100 units – 6.20 JOD/Unit 
// d.  For units above 250 – 7.50 JOD/Unit 



function claculateBill($consumedUnits){
    $tierOne = 2.5;
    $tierTwo = 5.0;
    $tierThree = 6.2;
    $tierFour = 7.5;
    $total = 0;

    if($consumedUnits <= 50){
        $total += ($consumedUnits * $tierOne);
        $consumedUnits = 0;
    }
    else{
        $consumedUnits -= 50;
        $total += (50 * $tierOne);
    }
    if($consumedUnits <= 100){
        $total += ($consumedUnits * $tierTwo);
        $consumedUnits = 0;

    }
    else{
        $consumedUnits -= 100;
        $total += (100 * $tierTwo);
    }
    if($consumedUnits <= 100){
        $total += ($consumedUnits * $tierThree);
        $consumedUnits = 0;

    }
    else{
        $total += (100* $tierThree);
        $consumedUnits -= 100;
        $total += ($consumedUnits * $tierFour);
    }
    echo $total;
}

claculateBill(500);
/*
The Electricity Bill Exercise By Asem Al-Zaghal
*/
?>