<?php
class Validacion
{
    private $errores;
    //Constructor
    public function __construct()
    {
        $this->errores=array();
    }
    /**
     * comprueba si esta vacio el campo introducido
     * return boolean
     */
    public function requerido($campo)
    {
        if(!isset($_POST[$campo]) || empty($_POST[$campo])  )
        {
            $this->errores[$campo]="El campo ".$campo." no puede estar vacio";
            return false;
        }
        else
        {
            return true;
        }
    }
    /**
     * comprueba un rango de entero
     *
     * @param [type] $campo
     * @param [type] $min
     * @param [type] $max
     * @return void
     */
    public function enteroRango($campo,$min=PHP_INT_MIN,$max=PHP_INT_MAX)
    {
        //primeramente miramos si el entero tiene rango max o no
    }
    public function CadenaRango($campo,$min=PHP_INT_MIN,$max=PHP_INT_MAX)
    {

    }
    public function email()
    {

    }
    public function DNI($campo)
    {

    }
    public function patron($campo,$patron)
    {
        //preg_match
    }
    public function validaConFuncion($campo,$funcion,$mensaje)//call_user_func
    {
        
    }
}
?>