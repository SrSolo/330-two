<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title> Simple Calculator </title>
    <link rel="stylesheet" type="text/css" href="Calc.css" >
</head>
<body>
<p> 
    Result:
</p>
<?php
$x = $_GET['x'];
$y = $_GET['y'];
$op = $_GET['operation'];
function add($x, $y){
    return $x + $y;
}
function subtract($x, $y){
    return $x - $y;
}
function multiply($x, $y){
    return $x * $y;
}
function divide($x, $y){
    return $x / $y;
}

switch($op) {
    case "add":
        echo "bug";
        echo htmlentities(add($x, $y));
        break;
    case "subtract":
        echo htmlentities(subtract($x, $y));
        break;
    case "multiply":
        echo htmlentities(multiply($x, $y));
        break;
    case "divide":
        
        echo htmlentities(divide($x, $y));
        break;
}
?>
</body>
</html>