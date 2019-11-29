<?php

    if(isset($_POST["enviar"])){
        
        $edad=$_POST["edad_usuario"];

        if($edad<=18){
            echo "eres menor de edad";
        }else if($edad<=40) { // ELSE IF LO QUE HACE ES CUANDO SE CUMPLA IGNORA EL RESTO DE IFS
            echo "eres joven";
        }else if($edad<=65){
            echo "eres maduro";

        }else{
            echo "cuidate";
        }
    }



    // OTRA FORMA DE HACERLO ES LO SIGUIENTE

    if(isset($_POST["enviar"]){ //para preguntar cuando se presiona el boton enviar

        $edad=$_POST["edad_usuario"]; // toma el valor del textbox edad_usuario
        
        echo $edad<18 ? "Eres menor de edad. No tienes acceso" : "Eres mauor de edad. Tienes acceso";

        // tambien podemos almacenar esta respuesta y validacion en una variable de la siguiente forma

        $resultado = $edad<18 ? "Eres menor de edad. No tienes acceso" : "Eres mauor de edad. Tienes acceso";

    })

    // EJEMPLO PARA UNA CONDICIONAL DE CONTRASEÑA Y NOMBRE

    if(isset($_POST["enviar"])){

        $contra = $_POST["contraseña"];
        $nombre = $_POST["nombre"];

        $resultado = $nombre == "Esteban" && $contra == "1234" ? "Acceso correcto" : "Datos invalidos";

    }



    // CONDICIONAL SWITCH CASE :


    if(isset($_POST["enviar"])){

        $contra = $_POST["contraseña"]; // almacena en esta variable lo que hay en el campo contraseña
        $nombre = $_POST["nombre"]; // almacena en esta variable lo que hay en el campo nombre

        switch ($nombre){

            case "Juan":

                echo "Usuario autorizado. Hola Juan";

                break;

            case "Maria":

                echo "Usuario autorizado. Hola Maria";

               break;
            
            case "Wek":

                echo "Usuario autorizado. Hola Wek";

               break;

            default:

               echo "Usuario no autoriza2";
        }


        // AHORA BIEN.. PARA SER AMS REALISTAS JUGARIAMOS DE LA SIGUIENTE FORMA

        switch (true){

            case $nombre == "Juan" && $contra == "1234":

                echo "Usuario autorizado. Hola Juan";

                break;

            case $nombre == "Pedro" && $contra == "1234":

                echo "Usuario autorizado. Hola Pedro";

               break;
            
            case $nombre == "Pibe" && $contra == "1234":

                echo "Usuario autorizado. Hola Pibe";

               break;

            default:

               echo "Usuario no autoriza2";
        }
    }
?>