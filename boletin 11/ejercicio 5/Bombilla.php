<?php 
    class bombilla{
        private static $fusible=true;
        private $lugar;
        private $estado;
        private $potencia;
        function __construct($lugar,$potencia,$estado)
        {
            $this->lugar=$lugar;
            $this->estado=$estado;
            $this->potencia=$potencia;
        }
        
        function pulsar(){
            if($this->estado==0){
                $this->estado=1;
            }else{
                $this->estado=0;
            }
        }

        public static function inte($x){
            if($x){
                Bombilla::$fusible=true;
            }else{
                Bombilla::$fusible=false;
            }
        }

        /**
         * Get the value of lugar
         */ 
        public function getLugar()
        {
                return $this->lugar;
        }

        /**
         * Set the value of lugar
         *
         * @return  self
         */ 
        public function setLugar($lugar)
        {
                $this->lugar = $lugar;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of potencia
         */ 
        public function getPotencia()
        {
                return $this->potencia;
        }

        /**
         * Set the value of potencia
         *
         * @return  self
         */ 
        public function setPotencia($potencia)
        {
                $this->potencia = $potencia;

                return $this;
        }

        public static function getFusible(){
            return bombilla::$fusible;
        }
    }
?>