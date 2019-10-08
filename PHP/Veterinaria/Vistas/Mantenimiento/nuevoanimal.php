<?php
    Sesion::iniciar();
    $sanimal=Sesion::leer("veterinaria");
    //Si he realizado un submit
    $valida= new Validacion();
    if(!empty($_POST))
    {
        //para validar un chip:99-9999-AA
        $valida->patron('numeroChip','/^[0-9]{2}\-[0-9]{4}\-[A-Z]{2}$/');
        //valida el nombre,long min de 5 y max de 20
        $valida->CadenaRango('nombre',20,5);
        //raza longmax=15
        $valida->CadenaRango('raza',15);
        //valida fecha nacimiento ,tiene que ser igual o anterior a la actual
        $valida->validaConFuncion('fechanacimiento',
        'funcionesValidacion::ValidaFechaNacimiento',
        "la fecha de nacimiento debe ser igual o anterior a la actual");
        if($valida->ValidacionPasada())
        {

        

            $nchip=$_POST["numerochip"];
            $nombre=$_POST["nombre"];
            $raza=$_POST["raza"];
            $fnacimiento=$_POST["fechanacimiento"];
            $nuevoAnimal=new Animal($nchip,$nombre,$raza,new DateTime($fnacimiento));
            $sanimal->addAnimal($nuevoAnimal);
            Sesion::escribir("veterinaria",$sanimal);
        }
    }
?>
<form action="" method="post">
Nº Chip:<input type="text" name="numerochip" class="form-control" value=<?= $valida->getValor($nchip)?>><br>
Nombre:<input type="text" name="nombre" class="form-control" value=<?= $valida->getValor($nombre)?>><br>
Raza:<input type="text" name="raza" class="form-control" value=<?= $valida->getValor($raza)?>><br>
Fecha de Nacimiento:<input type="date" name="fechanacimiento" class="form-control" 
value=<?= $valida->getValor($fnacimiento)?>>
<br>
<input type="submit" value="Enviar" class="btn btn-primary">
</form>
<br>
<a href="?menu=mantenimiento">Volver a mantenimiento</a>