<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
    
    </style>

</head>
<body>
    
<?php 

        $nombre="Esteban";

        echo "<p class='resaltar'> Esto es un ejemplo de frase </p>"; // Le proporciona la clase CSS a la etiqueta <p>, y se utilizan comillas distintas 
        echo "Hola $nombre"; // La comilla doble toma la variable
        echo 'Hola $nombre'; // La comilla simple toma literal lo que dice, es decir no toma la variable

        //------------------------------------------------------------------------------

        $variable1="Casa";
        $variable2="CASA";

        $resultado=strcmp($variable1,$variable2); //Devuelve 1 si no son iguales y un 0 si son iguales (strcmp compara mayusculas)
        $resultado=strcasecmp($variable1,$variable2); //Devuelve 1 si no son iguales y un 0 si son iguales (strcasecmp ignra comparacion de mayusculas)
        //---------- 1 significa TRUE y 0 significa FALSE

        echo "El resultado es $resultado";

        //Utilizacion basica de condicional
        if($resultado){
            echo "No coinciden";
        }else{
            echo "coinciden";
        }

        echo "El resultado es $resultado";
    
        

?>      


</body>
</html>