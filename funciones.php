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
    
    //FUncion basica
    
    function incrementaVariable () {
        
        static $contador = 0;
        $contador ++;

        echo $contador . "<br>";

        // cuando la variable llega aqui al final la variable local se destruye, por lo tanto la variable debe estar declarada como static, y este conserva su valor para seguir siendo utilizado
            
    }

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();

    //Como funciona una funcion con parametros

     function suma ($num1, $num2) {

        $resultado = $num1 + $num2;

        return $resultado;

    }

    suma (5,7); // Esto lo que hace es llamar a la funcion entregandole dos parametros uno se almacenara en num1 y el otro en num2, para que con esos datos haga sus calculos
    
    echo (suma (5,7)); // Imprime en pantalla el resultado de la funcion 
    


    function  frase_mayus($frase, $conversion=true) {

        $frase = strtolower($frase); // lo que haya en la variable frase, pasa la primera letra a mayusculas y vuelve a guardarlo en $frase

        // A continuacion veremos un if que evaluara el parametro true
        // con el fin de que este sea manipulable al antojo del cliente
        // puesto que si el cliente dice que es verdadero se hara algo
        // si el usuario dice que es falso se hara otra cosa

        if ($conversion == true) {

            $resultado=ucwords($frase); // pasa todo a minuscula menos la inicial que se trabajo en la linea anterior

        }else{

            $resultado=strtoupper($frase); // pasa todo a mayusculas
        }

        return $resultado; //retornamos la variable en la que almacenamos el resultado final del if
    }

    echo (frase_mayus("weñaaaaa", false)); // EL valor por defecto es true por ende podems manipularlo en la llamada poniendo false o true si quieres escribirlo

    

    // Funcion por valor y Funcion por Referencia ---------------------

    echo "<br>";

    function incrementa ($valor1) {

        $valor1++;

        return $valor1;
    }

    $numero=5;
    
    echo incrementa($numero);   // le pasa la variable numero para que la resiva el parametro de la funcion llamada
    echo "<br>";

    echo $numero; // solamente muestra el valor de la variable
    echo "<br>";

    // EJEMPLO FUNCION POR REFERENCIA

    function cambia_mayus(&$param){

        $param=strtolower($param);
        $param=ucwords($param);

        return $param;
    }

    $cadena="hOlA mUnDo";

    echo cambia_mayus($cadena) . "<br>";

    echo $cadena;

    // Lo que acabamos de hacer es generar una diferencia:
        // Funcion por valor al momento del llamado realiza el cambio de la variable SOLO EN EL LLAMADO
        // FUncion por referencia aplica la funcion a esa variable y la modifica para siempre

    ?>
</body>
</html>