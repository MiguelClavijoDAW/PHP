<?php 
    class cubo{
        private $capacidad;
        private $cantidad;

        function __construct($capa,$canti)
        {
            if($canti>$capa){
                $canti=$capa;
            }
            $this->cantidad=$canti;
            $this->capacidad=$capa;
        }
        
        function __toString()
        {
            return "Capacidad: ".$this->capacidad." Cantidad: ".$this->cantidad;
        }

        function verter($cubo){
            $resto=$cubo->getCapacidad()-$cubo->getCantidad();
            if($resto>=$this->cantidad){
                $cubo->setCantidad($this->cantidad+$cubo->getCantidad());
                $this->setCantidad(0);
            }else{
                $cubo->setCantidad($cubo->getCapacidad());
                $this->setCantidad($this->getCantidad()-$resto);
            }
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        /**
         * Get the value of capacidad
         */ 
        public function getCapacidad()
        {
                return $this->capacidad;
        }

        /**
         * Set the value of capacidad
         *
         * @return  self
         */ 
        public function setCapacidad($capacidad)
        {
                $this->capacidad = $capacidad;

                return $this;
        }
    }

?>