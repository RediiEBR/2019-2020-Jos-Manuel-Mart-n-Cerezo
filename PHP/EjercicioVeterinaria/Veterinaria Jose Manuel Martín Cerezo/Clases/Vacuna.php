<?php
    class Vacuna
    {
        public function __construct(string $tipovacuna, DateTime $fechavacuna,
        string $observaciones)
        {
            $this->tipovacuna=$tipovacuna;
            $this->fechavacuna=$fechavacuna;
            $this->observaciones=$observaciones;
        }
        private $tipovacuna;
        private $fechavacuna;

        private $observaciones;

        /**
         * Get the value of tipovacuna
         */ 
        public function getTipovacuna()
        {
                return $this->tipovacuna;
        }

        /**
         * Set the value of tipovacuna
         *
         * @return  self
         */ 
        public function setTipovacuna(string $tipovacuna)
        {
                $this->tipovacuna = $tipovacuna;

              
        }

        /**
         * Get the value of fechavacuna
         */ 
        public function getFechavacuna()
        {
                return $this->fechavacuna;
        }

        /**
         * Set the value of fechavacuna
         *
         * @return  self
         */ 
        public function setFechavacuna(string $fechavacuna)
        {
                $this->fechavacuna = $fechavacuna;

                return $this;
        }

        /**
         * Get the value of observaciones
         */ 
        public function getObservaciones()
        {
                return $this->observaciones;
        }

        /**
         * Set the value of observaciones
         *
         * @return  self
         */ 
        public function setObservaciones(string $observaciones)
        {
                $this->observaciones = $observaciones;

                return $this;
        }

    }
?>