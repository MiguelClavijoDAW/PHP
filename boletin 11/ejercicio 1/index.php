<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class persona{
            private $nombre;
            private $sueldo;

            public function __construct($nombre,$sueldo)
            {
                $this->nombre=$nombre;
                $this->sueldo=$sueldo;
            }

            public function asigna ($nom,$suel){
                $this->nombre=$nom;
                $this->sueldo=$suel;
            }

            public function impuesto(){
                if($this->sueldo>=3000){
                    return $this->nombre." Si paga impuesto";
                }else{
                    return $this->nombre." No paga impuesto";
                }
            }
            public function __toString()
            {
                return "Nombre: ".$this->nombre." Sueldo: ".$this->sueldo;
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
             * Get the value of sueldo
             */ 
            public function getSueldo()
            {
                        return $this->sueldo;
            }

            /**
             * Set the value of sueldo
             *
             * @return  self
             */ 
            public function setSueldo($sueldo)
            {
                        $this->sueldo = $sueldo;

                        return $this;
            }
        }

        $per1=new persona("Manuel",1000);
        echo $per1->__toString()."<br>";
        $per1->asigna("Pepe", 3000);
        echo $per1->impuesto()."<br>";
    ?>
</body>
</html>