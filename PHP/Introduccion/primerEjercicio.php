<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tabla de multiplicar</title>
</head>
<body>
<h1>TABLAS DE MULTUPLICAR</h1>
    <?php
    for ($i=1; $i <=10; $i++) { 
        echo(
            "<table border=1>
            <tr>Tabla del $i</tr>");
           
        for ($x=0; $x <=10 ; $x++)
         { 
            
            echo ("<td>".$i."x".$x."=".$x*$i."</td>");
            echo"<tr>";
            echo"</tr>";
        }
       echo"</table>";
       echo"<br/>";
    }
    ?>
</body>
</html>