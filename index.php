<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>weña</title>
</head>
<body>
    
<?php

    //IMPRESIONES -----------------------------------------------------

    print "Bienvenidos al curso de PHP <br>"; // imprime y hace un salto de linea (<br>) 

    print "Hola alumnos <br>";

    print "wEÑA";


    // CREACION DE VARIABLES -----------------------------------------

        $nombre = "Juan";
        $edad = 12;

    // Visualizar el contenido de las variables ----------------------

        print $nombre;
        print $edad;
            //Ó
        echo $nombre;
        echo $edad;


    //Concatenar variables -------------------------------------------

        print "El nombre de usuario es <br>" . $nombre;
                    //ó
        print "El nombre de usuario es $nombre <br>";
                    //ó
        echo "El nombre de usuario es <br>" . $nombre;
        
            //recomendado utilizar echo
    
    
    //LLAMAR ARCHIVOS EXTERNOS --------------------------------------    
    
        include ("segunda.php");

        dameDatos(); //Funcion hecha en el archivo segunda.php
?>

</body>
</html>