<?php
    //si esto es verdad he hecho un submit
    if(!empty($_POST))
    {
        $nChip=$_POST["numerochip"];
        $nombre=$_POST["nombre"];
        $raza=$_POST["raza"];
        $fechaNac=$_POST["fechaNacimiento"];
        $nuevoAnimal = new Animal($nchip,$nombre,$raza,$fechaNac);
        $sanimal->addAnimal($nuevoAnimal);
    }
?>
<form action="" method="post">

   Nºchip <input type="text" name="numerochip" class="form-control"> <br>
   nombre: <input type="text" name="nombre" class="form-control"> <br>
    raza:<input type="text" name="raza" class="form-control"> <br>
    fecha de nacimiento: <input type="date" name="fechaNacimiento" class="form-control"> <br>
    <br>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>