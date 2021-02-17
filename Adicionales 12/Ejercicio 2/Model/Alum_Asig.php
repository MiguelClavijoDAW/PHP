<?php 
    include "../Model/Asignatura.php";
    class Alum_Asig{
        private $matricula;
        private $codigo;

        function __construct($matricula=0,$codigo=0)
        {
            $this->matricula=$matricula;
            $this->codigo=$codigo;
        }
        
        public static function getAlum_asig(){
            $conexion=EscuelaDB::connectDB();
            $sql="SELECT * FROM alumno_asignatura";
            $consulta=$conexion->query($sql);
            $alum_asig=[];
            while ($aux=$consulta->fetchObject()){
                $alum_asig[]=new Alum_Asig($aux->matricula,$aux->codigo_asig);
            }
            return $alum_asig;
        }

        public static function moduloAlumno($matricula){
            $conexion=EscuelaDB::connectDB();
            $sql="SELECT * FROM alumno_asignatura WHERE matricula=".$matricula;
            $consulta=$conexion->query($sql);
            $moduloAlumno=[];
            while ($aux=$consulta->fetchObject()) {
                $moduloAlumno[]=new Asignatura($aux->codigo_asig);
            }
            return $moduloAlumno;
        }

        function añadir(){
            $conexion=EscuelaDB::connectDB();
            $sql="INSERT INTO alumno_asignatura VALUE ($this->matricula,$this->codigo)";
            $conexion->exec($sql);
        }

        function asignaturas(){
            $conexion=EscuelaDB::connectDB();
            $sql="SELECT * FROM alumno_Asignatura WHERE matricula=".$this->matricula;
            $consulta=$conexion->query($sql);
            $asignaturas=[];
            while ($aux=$consulta->fetchObject()) {
                $asignaturas[]=new Alum_Asig($aux->matricula,$aux->codigo_asig);
            }
            return $asignaturas;
        }
        function eliminar(){
            $conexion=EscuelaDB::connectDB();
            $sql="DELETE FROM alumno_asignatura WHERE matricula=$this->matricula and codigo_asig=$this->codigo";
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
    }
?>