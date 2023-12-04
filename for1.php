<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>

<body>
    <?php
        print("<table width='400' border=1>");
        print("<tr>");
        
        for($x=1;$x<10;$x++){
            print("<td>");
            
            for($y=1;$y<10;$y++){
                print("$x x $y = " .($x*$y));
                print("<br>");
        }
        
        print("</td>");
       
        if($x % 3 == 0){
            print("</tr>");
            print("<tr>");
        }
    }
    ?>
</body>
</html>