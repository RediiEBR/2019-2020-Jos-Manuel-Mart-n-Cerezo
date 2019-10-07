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
        //primeramente miramos si está vacío
       
       
        //primeramente miramos si el entero tiene rango max/min o no
        if($min!=PHP_INT_MIN || $max!=PHP_INT_MAX)
        {
            //validamos 
            if(filter_var($campo,FILTER_VALIDATE_INT(),
            array("options" => array("rango_minimo"=>$min, "rango_maximo"=>$max))) == true)
            {
                return true;
            }
            else{
                $this->errores[$campo]="El campo ".$campo." no está en el rango requerido,
                 que es entre ".$min." y ".$max;
                return false;
            }

        }
        else #miramos sin filtro de rango que sea un entero
        {
            if(filter_var($campo,FILTER_VALIDATE_INT()== true))
            {
                
                return true;
            }
            else
            {
                $this->errores[$campo]="el dato introducido no es un número entero";
                return false;
            }
        }

    }
    public function CadenaRango($campo,$min=PHP_INT_MIN,$max=PHP_INT_MAX)
    {

    }
    public function email($campo)
    {

    }
    public function DNI($campo)
    {
        //necesaria expresión regular
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