<?php

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> 
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => 
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid" );  

$arrayKey= array_keys($cities);

for($i =0; $i < count($cities); $i++){
    $country = $arrayKey[$i];
    $capital = $cities[$country];

    echo "The capital of ". $country ." is ". $capital .". <br>";
}
/*
The Assosiative Array printing Exercises By Asem Al-Zaghal
*/
?>