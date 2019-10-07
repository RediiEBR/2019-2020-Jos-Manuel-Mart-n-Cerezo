<?php
if(!empty($_POST))
{
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            echo "Clave tipo array ".$key;
            foreach ($value as $key2 => $value2) {
                echo "Clave: ".$key2." y valor: ".$value2."</br>";
            }
        }
        else
        {
            echo "Clave: ".$key." y valor: ".$value."</br>";
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <form action="" method="post">
        Edad:
        <input type="number" name="edad" id="" class="form-control"></br>
        Estudios:
        <select name="estudios" id="">
        <option value="Basica">Básica</option>
        <option value="Secundaria">Secundaria</option>
        <option value="Bachiller">Bachiller</option>
        <option value="Grado">Grado</option>
        </select>
        <br>
        <input type="radio" name="sexo" value="Mujer" id=""class="form-control">Mujer
        <input type="radio" name="sexo" value="Hombre" class="form-control">Hombre
        <input type="radio" name="sexo" value="Otros" class="form-control">Otros
        <br>
        <input type="checkbox" name="aficiones[]" value="Cine" class="form-control">Cine <br>
        <input type="checkbox" name="aficiones[]" value="Juegos raros" class="form-control">Juegos raros <br>
        <input type="checkbox" name="aficiones[]" value="Salir amigos" class="form-control">Salir de amigos <br>

        <input type="submit" value="Enviar" class="btn btn-primary">

    </form>
</body>
</html>