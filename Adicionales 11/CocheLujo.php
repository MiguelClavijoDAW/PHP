<?php 
    include 'Coche.php';
    Class CocheLujo extends Coche{
        private $suplemento;

        function __construct($matricula,$modelo,$precio,$suplemento)
        {
            parent::__construct($matricula,$modelo,$precio);
            $this->suplemento=$suplemento;
        }

        function getPrecio()
        {
            return parent::getPrecio()+$this->suplemento;
        }

        function __toString()
        {
            return parent::__toString()."<td>".$this->suplemento."</td>";
        }

        /**
         * Get the value of suplemento
         */ 
        public function getSuplemento()
        {
                return $this->suplemento;
        }

        /**
         * Set the value of suplemento
         *
         * @return  self
         */ 
        public function setSuplemento($suplemento)
        {
                $this->suplemento = $suplemento;

                return $this;
        }
    }
?>