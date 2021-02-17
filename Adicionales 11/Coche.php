<?php 
session_start();
if(!isset($_SESSION['modeloCaro'])){
    $_SESSION['modeloCaro']="";
    $_SESSION['precioCaro']=0;
}
    class Coche{
        private static $modeloCaro;
        private static $precioCaro;
        private $matricula;
        private $modelo;
        private $precio;
        
        function __construct($matricula,$modelo,$precio)
        {
            $this->precio=$precio;
            $this->modelo=$modelo;
            $this->matricula=$matricula;
            if($_SESSION['precioCaro']<$precio){
                $_SESSION['precioCaro']=$precio;
                $_SESSION['modeloCaro']=$modelo;
            }
        }

        function __toString()
        {
            return "<td>".$this->matricula."</td><td>".$this->modelo."</td><td>".$this->precio."</td>";
        }

        /**
         * Get the value of matricula
         */ 
        public function getMatricula()
        {
                return $this->matricula;
        }

        /**
         * Set the value of matricula
         *
         * @return  self
         */ 
        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

                return $this;
        }

        /**
         * Get the value of modelo
         */ 
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */ 
        public function setModelo($modelo)
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;
                if($_SESSION['preciocaro']<$precio){
                    $_SESSION['precioCaro']=$precio;
                    $_SESSION['modeloCaro']=$this->modelo;
                }

                return $this;
        }
    }
?>