<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>

<body>
    <?php
        $edad=20;

        #condicional múltiple que imprime un texto según la edad
        #mejora el código para que los rangos sean MAYOR: 18 A 80 y
        #MENOR 11 A 17
        if($edad>=18){
            echo "Eres mayor de edad";
        }elseif ($edad<18) {
            echo "Eres menor de edad";
        }else {
            echo "Algo anda mal :(";
        }        
    ?>
</body>
</html>