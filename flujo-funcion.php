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
        echo "Este es primer mensaje<br>";

        include ("proporciona-datos.php");
        /**
         * en lugar de include puedo usar require
         * 
         * y el resultado dara el mismo
         * 
         * include ("proporciona-datos2.php");
         * require ("proporciona-datos2.php");
         * 
         * pero la diferencia es:
         * 
         * =>   si usamos el include y colocamos un archivo qu no existe y lo ejecutamos en el navegador todo lo demas codigo funcionara
         * pero mostrara error de que no hay el archivo y por ende mostrar error en la llamada a funcion
         * 
         * =>   si usamos el require y colocamos un archivo que no existe y lo ejecutamos en el navegador todo el codigo a partir del require 
         * no funcionara es decir que el archivo tiene que ser requerido si o si y si no es asi todo el codigo a partir del require no funcionara
         * y dara error
         * 
         * por lo tanto se puede decir que el include es mas flexible que el require
         * 
         */

        echo "Este es el segundo mensaje<br>";
        /**
         * llamamos a la funcion dame datos que esta en el archivo
         * proporciona-datos.php que es un archivo externo
         */
        dameDatos();
        dameDatos();
        /**
         * podemos llamar a una funcion cuantas veces queramos
         */
    ?>
</body>
</html>