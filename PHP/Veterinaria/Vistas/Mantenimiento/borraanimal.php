<?php
    Sesion::iniciar();
    $Sanimal=Sesion::leer('veterinaria');
    if(isset($_POST['borrar']))
    {
        $Sanimal->removeAnimal($Sanimal->findAnimalByID($_GET['id']));
        Sesion::escribir('veterinaria',$Sanimal);
        header("location:?menu=mantenimiento");
    }
    if(isset($_POST['cancelar']))
    {
        header("location:?menu=mantenimiento");
    }
?>
<h2>¿confirmas que quieres borrar el animal con NºChip=<?=$_GET['id']?>?</h2>
<form action="" method="post">
    <input type="submit" value="Cancelar" name="cancelar"class="btn btn-secondary">
    <input type="submit" value="Borrar" name="borrar"class="btn btn-primary">
</form>