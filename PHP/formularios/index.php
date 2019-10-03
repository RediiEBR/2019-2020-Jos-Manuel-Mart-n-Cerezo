<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    </head>
    <body>
        <form action="" method="post">
            Edad: <input type="number" name="edad" value="" class="form-control"> <br>
            Estudios: <select name="estudios" class="form-control">
                <option value="Basica">Basica</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Bachiller">bachiller</option>
                <option value="Grado">Grado</option>
                        </select>
                        <br>
            <input type="radio" name="sexo" id="" checked="checked" class="form-control">Hombre <br>
            <input type="radio" name="sexo" id="" class="form-control">Mujer <br>
            <input type="radio" name="sexo" id="" class="form-control">Otros <br>

            <input type="checkbox" name="aficciones[]" id="" class="form-control">Cine <br>
            <input type="checkbox" name="aficciones[]" id="" class="form-control">Juegos <br>
            <input type="checkbox" name="aficciones[]" id="" class="form-control">Salir de amigos <br> 
            <input type="submit" value="Enviar" class="btn-primary">
        </form>
    </body>
</html>