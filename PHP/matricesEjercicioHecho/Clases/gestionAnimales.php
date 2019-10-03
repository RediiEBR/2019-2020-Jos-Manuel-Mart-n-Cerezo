<?php
    class GestionAnimales
    {
        private $animales=array();
        public function __construct()
        {
            
        }
        public function crearAnimal(string $numeroChip,string $nombre,string $raza
        ,string $fechaNacimiento)
        {
            $this->animales[$numeroChip]=[$nombre,$raza,$fechaNacimiento,"vacunas"=>[]];/**se identifica con el
            índice(en este caso 3) o con "Vacunas". Haciendo esto creamos un animal sin vacunas */
        }
        /**
         * Borra un animal y, si tiene, sus vacunas
         *
         * @param string $numeroChip
         * @return void
         */
        public function borraAnimal(string $numeroChip)
        {
            unset($this->animales[$numeroChip]);
        }
        /**
         * Actualiza Animal con nuevos datos
         *
         * @param string $numeroChip
         * @param array $NuevosDatos
         * @return void
         */
        public function modificaAnimal(string $numeroChip,array $NuevosDatos)
        {
            $this->animales[$numeroChip]=$NuevosDatos;
        }
        /**
         * añade vacuna a animales
         *
         * @param string $numeroChip
         * @param string $tipoVacuna
         * @param string $fechaVacuna
         * @param string $Observaciones
         * @return void
         */
        public function NuevaVacuna(string $numeroChip, string $tipoVacuna, string $fechaVacuna, 
        string $Observaciones)
        {
            $this->animales[$numeroChip]["vacunas"][$tipoVacuna]=[$tipoVacuna,$fechaVacuna,$Observaciones];
        }
        /**
         * modifica datos de vacunas
         *
         * @param string $numeroChip
         * @param string $tipoVacuna
         * @param array $nuevosDatos
         * @return void
         */
        public function modificaVacuna(string $numeroChip,string $tipoVacuna,array $nuevosDatos)
        {
            $this->animales[$numeroChip]["vacuna"][$tipoVacuna]=$nuevosDatos;
        }
        /**
         * devuelve la coleccion de animales
         *
         * @return array de los animales
         */
        public function todosAnimales()
        {
            return $this->animales;
        }
        /**
         * Devuelve las vacunas de un animal
         *
         * @param string $numeroChip
         * @return void
         */
        public function vacunasAnimal(string $numeroChip)
        {
            return $this->animales[$numeroChip]["vacunas"];
        }
    }
    


?>