<?php
    class Parcela  
    {
        private $idParcela;
        private $nombre;
        private $numParcela;
        private $numPoligono;
        private $numOlivos;
        public function _construct(string $idParcela,
        string $nombre,int $numParcela,int $numPoligono,int $numOlivos)
        {
            $this->idParcela=$idParcela;
            $this->nombre=$nombre;
            $this->numParcela=$numParcela;
            $this->numPoligono=$numPoligono;
            $this->numOlivos=$numOlivos;
            
        }

        /**
         * Get the value of idParcela
         */ 
        public function getIdParcela()
        {
                return $this->idParcela;
        }

        /**
         * Set the value of idParcela
         *
         * @return  self
         */ 
        public function setIdParcela($idParcela)
        {
                $this->idParcela = $idParcela;

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
         * Get the value of numParcela
         */ 
        public function getNumParcela()
        {
                return $this->numParcela;
        }

        /**
         * Set the value of numParcela
         *
         * @return  self
         */ 
        public function setNumParcela($numParcela)
        {
                $this->numParcela = $numParcela;

                return $this;
        }

        /**
         * Get the value of numPoligono
         */ 
        public function getNumPoligono()
        {
                return $this->numPoligono;
        }

        /**
         * Set the value of numPoligono
         *
         * @return  self
         */ 
        public function setNumPoligono($numPoligono)
        {
                $this->numPoligono = $numPoligono;

                return $this;
        }

        /**
         * Get the value of numOlivos
         */ 
        public function getNumOlivos()
        {
                return $this->numOlivos;
        }

        /**
         * Set the value of numOlivos
         *
         * @return  self
         */ 
        public function setNumOlivos($numOlivos)
        {
                $this->numOlivos = $numOlivos;

                return $this;
        }
    }
    
?>