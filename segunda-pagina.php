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
        //coemntarios
        //este es un comentario
        print "Bienvenidos a todos <br>";
        /*
        este en un comentario multilinea
        este es un comentario multilinea
        este es un comentario multilinea
        este es un comentario multilinea
        este es un comentario multilinea
        */

        //variables siempre empiezan con $

        $nombre;//declaramos una variable
        $nombre2="juan";//este es un string
        $edad=18;

        print $nombre2;
        print "<br>";
        print $edad;

        //concatenacion
        print "<br>El nombre del usuario es " . $nombre2;
        print "<br>El nombre del usuario es $nombre2";
        print '<br>El nombre del usuario es $nombre2';

        echo "<br>";
        echo $nombre2;
        echo "<br>El nombre es " . $nombre2 . $edad;
        echo "<br>El nombre es " . $nombre2 . " y tiene " . $edad . " anios";
        echo "<br>";
        echo $nombre2,$edad;//imprime varias variables por separado
        /*
        echo puede imprimir varias variables en un echo cosa que print
        no puede hacer o no admite imprimir en pantalla varias variables
        
        print es una funcion
        echo es una exprecion

        print se toma mas tiempo para imprimir en pantalla que echo
        por que tiene que hacer mas procesos internos
        */



    ?>
</body>
</html>