<style>

.resultado{
    color: #F00;
    font-weight: bold;
    font-size:32px;
}

</style>



<?php


if(isset($_POST["button"])){ // SENTENCIA PARA RECOGER LO QUE ENVIA EL BOTON BUTTON INDICANDO VARIABLE POR VARIABLE

    $numero1 = $_POST["num1"]; // recoge la NAME E ID del componente html que tenga como NAME E ID num1
    $numero2 = $_POST["num2"]; // recoge la NAME E ID del componente html que tenga como NAME E ID num2
    $operacion = $_POST["operacion"]; // recoge la NAME E ID del componente html que tenga como NAME E ID operacion

    calcular ($operacion); //llamo a la funcion calcular y a su vez le paso el valor de la variable operacion
}


    function calcular ($calculo){ //se crea la funcion y a su vez guarda el valor de la variable operacion en otra variable de cualquier nombre en este caso calculo

        if(!strcmp("Suma",$calculo)) { 

            global $numero1;
            global $numero2;

            $resultado = $numero1 + $numero2; // almacenamos en una sola variable la operacion de dos variables

            echo "<p class='resultado'> El resultado es: $resultado </p>"; // mostramos el valor de la variable resultado
                                                                            // Ingresamos la etiqueta p para darle un estilo que llamamos resultado
        }
    
        if(!strcmp("Resta",$calculo)) {
    
            global $numero1;
            global $numero2;

            $resultado = $numero1 - $numero2;

            echo "<p class='resultado'> El resultado es: $resultado </p>";
            
        }
    
        if(!strcmp("Multiplicacion",$calculo)) {

            global $numero1;
            global $numero2;
    
            $resultado = $numero1 * $numero2;

            echo "<p class='resultado'> El resultado es: $resultado </p>";
            
        }
    
        if(!strcmp("Division",$calculo)) {

            global $numero1;
            global $numero2;
    
            $resultado = $numero1 / $numero2;

            echo "<p class='resultado'> El resultado es: $resultado </p>";
            
        }
    
        if(!strcmp("Modulo",$calculo)) {

            global $numero1;
            global $numero2;
    
            $resultado = $numero1 % $numero2;

            echo "<p class='resultado'> El resultado es: $resultado </p>";
            
        }

        if(!strcmp("Incremento",$calculo)) {

            global $numero1;
            
            $numero1 ++;
            $resultado = $numero1 ;

            echo "<p class='resultado'> El resultado es: $resultado </p>";
            
        }

        if(!strcmp("Decremento",$calculo)) {

            global $numero1;
            
            $numero1 --;
            $resultado = $numero1 ;

            echo "<p class='resultado'> El resultado es: $resultado </p>";
            
        }

    }

    // EXISTEN MAS OPERADORES MATEMATICOS, COMO POTENCIA, REDONDEAR, ETC EN PHP.NET !!!!!!!!!
    

?>