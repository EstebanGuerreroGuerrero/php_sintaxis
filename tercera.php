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


    $nombre =  "Esteban";

    function dameNombre(){


        global $nombre="Maria"; // Global es para indicar que es una varible de afuera de la funcion
    }

    dameNombre();

    echo $nombre;




?>


</body>
</html>