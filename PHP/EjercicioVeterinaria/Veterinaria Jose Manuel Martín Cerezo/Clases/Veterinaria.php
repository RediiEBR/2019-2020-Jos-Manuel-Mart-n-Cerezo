<?php
    class Veterinaria
    {
        private $nombre;
        private $cif;
        //propiedad de la relacion entre veterinaria y animal
        private $animales;
        //Constructor
        public function __construct(string $nombre,string $cif)
        {
            $this->nombre=$nombre;
            $this->cif=$cif;
        }
        /**
         * añade un nuevo animal a la coleccion
         *
         * @param Animal $nuevoAnimal
         * @return void
         */
        public function addAnimal(Animal $nuevoAnimal)
        {
            $this->$animales[$nuevoAnimal->getNumeroChip()]=$nuevoAnimal;
        }
        /**
         * Para borrar un animal
         *
         * @param Animal $borrarAnimal
         * @return void
         */
        public function removeAnimal(Animal $borrarAnimal)
        {
            unset($this->animales[$borrarAnimal->getNumeroChip()]);
        }
        /**
         * modifica los datos de un animal si existe
         *
         * @param Animal $modificaAnimal
         * @return void
         */
        public function updateAnimal(Animal $modificaAnimal)
        {
            if(isset($this->animales[$modificaAnimal->getNumeroChip()]))
            {
                $this->animales[$modificaAnimal->getNumeroChip()]=$modificaAnimal;
            }
        }
        /**
         * getter de animales
         *
         * @return void
         */
        public function AllAnimals()
        {
            return $this->animales;
        }
        /**
         * para buscar un animal en concreto
         *
         * @param string $numeroChip
         * @return void
         */
        public function findAnimalByID(string $numeroChip)
        {
            return $this->animales[$numeroChip];
        }
    }
?>