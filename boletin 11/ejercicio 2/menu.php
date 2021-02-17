<?php 
        class Menu{
            private $titulo;
            private $enlace;
            
            public function __construct()
            {
                $this->titulo=[];
                $this->enlace=[];
            }

            public function añadirEnlementos($titu,$enla){
                $this->titulo[]=$titu;
                $this->enlace[]=$enla;
            }

            public function menuVertical(){
                for ($i=0; $i < count($this->titulo); $i++) { ?>
                    <a href='<?=$this->enlace[$i]?>'><?=$this->titulo[$i]?></a><br>
                    <?php
                }
            }
            public function menuHorizontal(){
                for ($i=0; $i < count($this->titulo); $i++) { ?>
                    <a href='<?=$this->enlace[$i]?>'><?=$this->titulo[$i]?></a>
                    <?php
                }
            }
        }
    ?>