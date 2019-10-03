<?php

class Animal
    {
        private $numeroChip;
        private $nombre;
        private $raza;
        private $fechaNac;
        private $Vacunas=[];
        public function __construct(string $numeroChip,string $nombre, DateTime $fechaNac,string $raza/**,$Vacunas */)
        {
            $this->numeroChip=$numeroChip;
            $this->fechaNac=$fechaNac;
            $this->nombre=$nombre;
            $this->raza=$raza;
            $this->Vacunas=$Vacunas;
        }

    

        /**
         * Get the value of genero
         */ 
        public function getRaza()
        {
                return $this->raza;
        }

        /**
         * Get the value of numeroChip
         */ 
        public function getNumeroChip()
        {
                return $this->numeroChip;
        }

        /**
         * Set the value of numeroChip
         *
         * @return  self
         */ 
        public function setNumeroChip($numeroChip)
        {
                $this->numeroChip = $numeroChip;

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
        public function addVacuna(Vacuna $nuevaVacuna)
        {
            $this->$Vacunas[$nuevaVacuna->getTipovacuna()]=$nuevaVacuna;
        }
        /**
         * Para borrar un animal
         *
         * @param Animal $borrarAnimal
         * @return void
         */
        public function removeVacuna(Vacuna $borrarVacuna)
        {
            unset($this->$Vacunas[$nuevaVacuna->getTipovacuna()]);
        }
        /**
         * modifica los datos de un animal si existe
         *
         * @param Animal $modificaAnimal
         * @return void
         */
        public function updateVacuna(Vacuna $modificaVacuna)
        {
            if(isset($this->$Vacunas[$nuevaVacuna->getTipovacuna()]))
            {
                $this->$Vacunas[$nuevaVacuna->getTipovacuna()]=$modificaVacuna;
            }
        }
        /**
         * getter de animales
         *
         * @return void
         */
        public function AllVacunas()
        {
            return $this->Vacunas;
        }
        /**
         * para buscar un animal en concreto
         *
         * @param string $numeroChip
         * @return void
         */
        public function findVacunaByID(string $tipoVacuna)
        {
            return $this->vacunas[$tipoVacuna];
        }

        /**
         * Get the value of fechaNac
         */ 
        public function getFechaNac()
        {
                return $this->fechaNac;
        }

        /**
         * Set the value of fechaNac
         *
         * @return  self
         */ 
        public function setFechaNac($fechaNac)
        {
                $this->fechaNac = $fechaNac;

                return $this;
        }
}
    
?>