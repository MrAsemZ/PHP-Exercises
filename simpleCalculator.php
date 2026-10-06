<?php
if(isset($_GET['input1']) && isset($_GET['input2']) && isset($_GET['drop'])){
    $input1 =$_GET['input1'];
    $input2 =$_GET['input2'];
    $action =$_GET['drop'];
}

if($action == "add"){
    echo $input1 + $input2;
}
elseif($action == "subtract"){
    echo $input1 - $input2;

}
elseif($action == "multiply"){
    echo $input1 * $input2;

}
elseif($action == "divide"){
    echo $input1 / $input2;

}
/*
The Simple Calculator Exercise By Asem Al-Zaghal
*/
?>

<html>
<head>
<title>PHP Calculator</title>
</head>

<body>
    <form action="simpleCalculator.php" method="GET">

        <input type="text" name="input1">
        <input type="text" name="input2">
        <select name="drop">
            <option value="add">Add (➕)</option>
            <option value="subtract">Subtract (➖)</option>
            <option value="multiply">Multiply (✖️)</option>
            <option value="divide">Divide (➗)</option>
        </select>
        <input type="submit" name ="submit">
    </form>
</body>
</html>