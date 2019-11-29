<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

//Operadores de comparacion de variables

$var1 == $var2 // Igual que.. Verdadero si las dos variables son iguales
$var1 === $var2 // Identica que.. Verdadero si las dos variables son iguales y del mismo tipo
$var1! = $var2 // Diferente que.. Verdadero si las dos variables no son iguales
$var1 <> $var2 // Diferente que.. Verdadero si las dos variables  no son iguales y ademas no son del mismo tipo

// Pruebas

$variable1 = 0;
$variable2 = "0";

if($variable1===$variable2){
    
    echo "Son iguales";
}else{
    echo "No son iguales";
}

?>

    
</body>
</html>