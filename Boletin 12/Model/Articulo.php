<?php 
include "ArticuloDB.php";
    class Articulo{
        private $codigo;
        private $titulo;
        private $texto;
        private $fecha;
        
        function __construct($codigo=0,$titulo="",$texto="",$fecha="")
        {
            $this->codigo=$codigo;
            $this->titulo=$titulo;
            $this->texto=$texto;
            $this->fecha=$fecha;
        }
        
        function insertar(){
            $conexion=ArticuloDB::connectDB();
            $sql="INSERT INTO articulos (titulo, texto, fecha) VALUE ('$this->titulo','$this->texto', NOW())";
            $conexion->exec($sql);
        }

        function modificar(){
            $conexion=ArticuloDB::connectDB();
            $sql="UPDATE articulos SET titulo='$this->titulo', texto='$this->texto' WHERE codigo=$this->codigo";
            $conexion->exec($sql);  
        }

        function borrar(){
            $conexion=ArticuloDB::connectDB();
            $sql="DELETE FROM articulos WHERE codigo=\"$this->codigo\"";
            $conexion->exec($sql);    
        }

        public static function getArticulos(){
            $conexion=ArticuloDB::connectDB();
            $sql="SELECT * FROM articulos";
            $consulta=$conexion->query($sql);
            $articulos=[];
            while($registro=$consulta->fetchObject()){
                $articulos[]=new Articulo($registro->codigo,$registro->titulo,$registro->texto,$registro->fecha);        
            } 
            return $articulos;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of texto
         */ 
        public function getTexto()
        {
                return $this->texto;
        }

        /**
         * Set the value of texto
         *
         * @return  self
         */ 
        public function setTexto($texto)
        {
                $this->texto = $texto;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
        }
    }
?>