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


        /**
         * Get the value of dni
         */ 
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         *
         * @return  self
         */ 
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellido1
         */ 
        public function getApellido1()
        {
                return $this->apellido1;
        }

        /**
         * Set the value of apellido1
         *
         * @return  self
         */ 
        public function setApellido1($apellido1)
        {
                $this->apellido1 = $apellido1;

                return $this;
        }

        /**
         * Get the value of apellido2
         */ 
        public function getApellido2()
        {
                return $this->apellido2;
        }

        /**
         * Set the value of apellido2
         *
         * @return  self
         */ 
        public function setApellido2($apellido2)
        {
                $this->apellido2 = $apellido2;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
    }
?>