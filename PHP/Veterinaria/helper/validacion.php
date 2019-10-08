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
     * comprueba si esta vacio
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
    public function enteroRango($campo,$min=PHP_INT_MIN,$max=PHP_INT_MAX)
    {

    }
    public function CadenaRango($campo,$max,$min)
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
        if(!call_user_func($funcion))
        {
            $this->errores[$campo]=$mensaje;
            return false;
        }
        else {
            return true;
        }
    }
    /**
     * para mirar si ha validado todo
     *
     * @return void
     */
    public function ValidacionPasada()
    {
        if(count($this->errores)!=0)
        {
            return false;
        }
        else {
            return true;
        }
    }
}
?>