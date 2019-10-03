<?php
require_once './Cargadores/cargarclases.php';
require_once './Cargadores/cargarhelper.php';
Sesion::iniciar();
$Sanimal= new Veterinaria("Sanimal SL","2365894A");
Sesion::escribir("veterinaria",$Sanimal);
class Principal
{
    
    public static function main()
    {
        require_once './Vistas/Principal/layout.php';
        
    }

}
Principal::main();