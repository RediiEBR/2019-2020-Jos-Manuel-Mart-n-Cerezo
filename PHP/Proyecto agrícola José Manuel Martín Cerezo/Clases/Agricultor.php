<?php
    class Agricultor
    {
        private $dni;
        private $nombre;
        private $apellido1;
        private $apellido2;
        private $email;
        public function __construct(string $dni,string $nombre,string $apellido1
        ,string $apellido2='null',string $email)
        {
            $this->dni=$dni;
            $this->nombre=$nombre;
            $this->apellido1=$apellido1;
            $this->apellido2=$apellido2;
            $this->email=$email;
        }

    }
?>