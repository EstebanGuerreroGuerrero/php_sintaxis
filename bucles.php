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

// BUCLE: ESTRUCTURA REPETTIVA. REPITE EL CODIGO EN SU INTERIOR X VECES.

    $var1=1;


    //WHILE: Ejecutara el codigo siempre y cuando la condicion sea cierta

    while($var1<6){ 
        
        echo "Estamos ejecutando el bucle <br>";

        $var1++;

    } 

    echo "Estamos fuera del bucle <br>";
                    // Recordar meterlos en clases si es necesario




    //DO WHILE: Ejecutara el codigo almenos una vez antes de evaluar la condicion y verificiar si es falsa o verdadero
    
    do{
        echo "Estamos ejecutando el codigo del bucle <br>";

        $var1++;
    }while($var1<6);

    echo "Hemos salido del bucle";


    // FOR: 

    for ($i = 0; $i <= 10 ; $i++) { // de momento la condicion es TRUE, hasta que sea false se mantendra ejecutando el for
    //1.Declaracion de variale, 2.Condicion, 3.Incremento o decremento -------  $i++, $i+=2 aumento de 2 en .. Existen mas aumentos y operaciones.

        echo "<p> Hemos entrado en el bucle for </p>"; // Este codigo se repetira hasta que la variable llegue hasta el valor de la condicion 

        // Existen maneras de cortar el proceso en caso de ser mecesario y es de la siguiente forma:

            if($i==5){
                echo "Se cumplio una subcondicion y ordenamos cortar el proceso";

            break; // corte del proceso
                // continue; ---- NO TOMA EN CUENTA LA PRIMERA VUELTA Y SIGUE CON LA SIGUIENTE
            }

    }
    
    for ($e=0; $e<=10 ; $e++) { 
        
        //Ejemplo para una multiplicacion mostrada en pantalla
        echo "9 x $e = " . 9*$e . "<br>";
    }

    echo "Se termino la multiplicacion";
?>
</body>
</html>
