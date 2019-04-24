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

        function dameDatos(){
            echo "Este es un mensaje de la funcion <br>";
        }

        echo "Este es el segundo mensaje<br>";
        /**
         * estructuras que rompen el flujo de programa:
         * 
         * condicionales    bucles  funciones
         * 
         * estos rompen con la ejecucion del programa porque
         * se altera con los saltos 
         * 
         * funcion: 
         * 
         * todo lo que este dentro de una funcion no se ejecuta hast que 
         * no sea llamado
         */
        dameDatos();
        dameDatos();
        dameDatos();
        /**
         * podemos llamar a una funcion cuantas veces queramos
         */
    ?>
</body>
</html>