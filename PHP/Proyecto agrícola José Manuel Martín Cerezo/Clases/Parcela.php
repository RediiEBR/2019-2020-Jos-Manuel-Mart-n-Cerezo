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
    }
    
?>