<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>asd</p>
    <form name="form1" method="post" action="operadores2.php">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">

            <label for="num2"></label>
            <input type="text" name="num2" id="num2">

            <label for="operacion"></label>
            <select name="operacion" id="operacion">
                <option>Suma</option>
                <option>Resta</option>
                <option>Multiplicacion</option>
                <option>Division</option>
                <option>Modulo</option>
                <option>Incremento</option>
                <option>Decremento</option>

            </select>
        
        </p>
        <p>
            <input type ="submit" name="button" id="button" value="enviar" onClick="prueba">    
        </p>

    </form>

    <?php

        // EJEMPLO DE COMO INCLUIR ARCHIVOS PHP YA CREADOS EN UNA VISTA

        include ("operadores2.php"); // AQUI LO QUE ESTAMOS HACIENDO ES HACER QUE ESTE ARCHIVO PUEDA INTERPRETAR EL CODIGO PHP OPERADORES2 
                                    //PARA QUE EL RESULTADO QUEDE EN ESTA MISMA PANTALLA

        if(isset($_POST["button"])){

            $numero1 = $_POST["num1"]; // recoge la NAME E ID del componente html que tenga como NAME E ID num1
            $numero2 = $_POST["num2"]; // recoge la NAME E ID del componente html que tenga como NAME E ID num2
            $operacion = $_POST["operacion"]; // recoge la NAME E ID del componente html que tenga como NAME E ID operacion
        
            calcular ($operacion); 
        }

        ?>

</body>
</html>