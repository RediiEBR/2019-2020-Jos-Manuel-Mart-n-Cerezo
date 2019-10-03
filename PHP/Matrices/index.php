<?php
require_once './clases/ejemplosMatrices.php';
require_once './clases/animal.php';
class Principal
{
    public static function main()
    {
        foreach (ejemplosMatrices::$nombres as $key => $nombre) {
            # code...
            echo $key."...".$nombre."<br/>";
        }
        foreach (ejemplosMatrices::$NombreEdad as $nombre => $edad) {
            echo "el tipo ".$nombre." tiene ".$edad." años <br/>";
            
        }
        //añadir elementos al final de un array
        EjemplosMatrices::$edades[]=89;
        //recorrer matriz de objetos asociativa
        foreach (ejemplosMatrices::MatrizObjetoAsociativa() as $nombre=>$animal) 
        {
            echo"el animal con nombre ".
            $nombre." pertenece al género ".$animal->getGenero()."<br/>";
            
        }
        //acceso a matriz de 2 dimensiones
    foreach (EjemplosMatrices::$comunidadesAsociativas as $comunidad =>
     $matrizProvincias) {
        # code...
        echo"<br/>la comunidad de ".$comunidad.
        " tiene las siguientes provincias<br/>";
        foreach ($matrizProvincias as $provincia) {
            echo "\t$provincia<br/>";
        }
    }
    }
}
Principal::main();
?>