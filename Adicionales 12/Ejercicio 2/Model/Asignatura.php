<?php 

    include "../Model/Alumno.php";

    class Asignatura{
        private $codigo;
        private $nombre;
        
        function __construct($codigo=0,$nombre="")
        {
            $this->codigo=$codigo;
            $this->nombre=$nombre;
        }

        public static function getAsignatura(){
                $conexion=EscuelaDB::connectDB();
                $sql="SELECT * FROM asignatura";
                $consulta=$conexion->query($sql);
                $asignatura=[];
                while ($aux=$consulta->fetchObject()) {
                        $asignatura[]=new Asignatura($aux->codigo,$aux->nombre);
                }
                return $asignatura;
        }

        function eliminar(){
                $conexion=EscuelaDB::connectDB();
                $sql="DELETE FROM asignatura WHERE codigo=".$this->getCodigo();
                $conexion->exec($sql);
        }

        function añadir(){
                $conexion=EscuelaDB::connectDB();
                $sql="INSERT INTO asignatura (nombre) VALUE ('$this->nombre')";
                $conexion->exec($sql);
        }

        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
        }

        /**
         * Set the value of codigo
         *
         * @return  self
         */ 
        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

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
    }
?>