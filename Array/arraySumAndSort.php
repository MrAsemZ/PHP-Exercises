<?php

$array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$average = array_sum($array) / count($array);

echo "Average Temperature: " . $average . "°C<br><br>";

sort($array);

// Five lowest temperatures
$lowest = array_slice($array, 0, 5);

echo "Five Lowest Temperatures:<br>";

foreach ($lowest as $temperature) {
    echo $temperature . "°C<br>";
}

// Five highest temperatures
$highest = array_slice($array, -5);

echo "<br>Five Highest Temperatures:<br>";

foreach ($highest as $temperature) {
    echo $temperature . "°C<br>";
}
/*
The Sum of Array then sorting it Exercises By Asem Al-Zaghal
*/
?>