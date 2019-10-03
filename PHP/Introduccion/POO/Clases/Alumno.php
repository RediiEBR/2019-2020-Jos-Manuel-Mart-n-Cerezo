<?php
class Alumno extends Persona 
{
    private $nota;
    public function _construct($dni,$nombre,$edad,$nota)
    {
        parent::_construct($dni,$nombre,$edad);
        $this->nota=$nota;
        //Alumno
        
    }
}

?>