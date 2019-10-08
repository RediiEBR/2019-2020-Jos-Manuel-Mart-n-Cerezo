<?php
class funcionesValidacion  
{
     public static function validaFechaNacimiento()
     {
         $fecha=new DateTime($_POST['fechaNacimiento']);
         $fechaActual=new DateTime('now');
         if(fecha>$fechaActual)
         {
             return false;
         }
         return true;
     }
}

?>