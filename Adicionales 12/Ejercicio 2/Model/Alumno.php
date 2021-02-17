<?php 
include "../Model/EscuelaDB.php";
    class Alumno{
        private $matricula;
        private $nombre;
        private $apellido;
        private $curso;
        
        function __construct($matrcula=0,$nombre="",$apellido="",$curso="")
        {
            $this->matricula=$matrcula;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->curso=$curso;
        }
        
        public static function getAlumnos(){
            $conexion=EscuelaDB::connectDB();
            $sql="SELECT * FROM alumno";
            $consulta=$conexion->query($sql);
            $alumnos=[];
            while ($aux=$consulta->fetchObject()) {
                $alumnos[]=new Alumno($aux->matricula,$aux->nombre,$aux->apellido,$aux->curso);
            }
            return $alumnos;
        }

        function añadir(){
                $conexion=EscuelaDB::connectDB();
                $sql="INSERT INTO alumno value ($this->matricula,'$this->nombre','$this->apellido','$this->curso')";
                $conexion->exec($sql);
        }

        function eliminar(){
                $conexion=EscuelaDB::connectDB();
                $sql="DELETE FROM alumno WHERE matricula=".$this->matricula;
                $conexion->exec($sql);
                $sql="DELETE FROM alumno_asignatura WHERE matricula=".$this->matricula;
                $conexion->exec($sql);
        }

        function modificar(){
                $conexion=EscuelaDB::connectDB();
                $sql="UPDATE alumno SET nombre='$this->nombre', apellido='$this->apellido', curso='$this->curso' WHERE matricula=$this->matricula";
                $conexion->exec($sql);
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
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of curso
         */ 
        public function getCurso()
        {
                return $this->curso;
        }

        /**
         * Set the value of curso
         *
         * @return  self
         */ 
        public function setCurso($curso)
        {
                $this->curso = $curso;

                return $this;
        }
    }
?>