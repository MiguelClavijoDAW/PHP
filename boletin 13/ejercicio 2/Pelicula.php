<?php 
include "agregarBD.php";
    class Pelicula{
        private $titulo;
        private $año;
        private $director;
        private $duracion;
        private $genero;
        private $poster;

        function __construct($titulo="",$año=0,$director="",$duracion=0,$genero="",$poster="")
        {
            $this->titulo=$titulo;
            $this->año=$año;
            $this->director=$director;
            $this->duracion=$duracion;
            $this->genero=$genero;
            $this->poster=$poster;
        }
        
        function insertar(){
            $conexion=agregarDB::connectDB();
            $sql="INSERT INTO peliculas (titulo,año,director,duracion,genero,poster) VALUE ('$this->titulo',$this->año,'$this->director','$this->duracion','$this->genero','$this->poster')";
            $conexion->exec($sql);
        }
        public static function getPeliculas(){
            $conexion=agregarDB::connectDB();
            $sql="SELECT * FROM peliculas";
            $consulta=$conexion->query($sql);
            $peliculas=[];
            while ($peli=$consulta->fetchObject()) {
                $peliculas[]=new Pelicula($peli->titulo,$peli->año,$peli->director,$peli->duracion,$peli->genero,$peli->poster);
            }
            return $peliculas;
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
         * Get the value of año
         */ 
        public function getAño()
        {
                return $this->año;
        }

        /**
         * Set the value of año
         *
         * @return  self
         */ 
        public function setAño($año)
        {
                $this->año = $año;

                return $this;
        }

        /**
         * Get the value of director
         */ 
        public function getDirector()
        {
                return $this->director;
        }

        /**
         * Set the value of director
         *
         * @return  self
         */ 
        public function setDirector($director)
        {
                $this->director = $director;

                return $this;
        }

        /**
         * Get the value of duracion
         */ 
        public function getDuracion()
        {
                return $this->duracion;
        }

        /**
         * Set the value of duracion
         *
         * @return  self
         */ 
        public function setDuracion($duracion)
        {
                $this->duracion = $duracion;

                return $this;
        }

        /**
         * Get the value of genero
         */ 
        public function getGenero()
        {
                return $this->genero;
        }

        /**
         * Set the value of genero
         *
         * @return  self
         */ 
        public function setGenero($genero)
        {
                $this->genero = $genero;

                return $this;
        }

        /**
         * Get the value of poster
         */ 
        public function getPoster()
        {
                return $this->poster;
        }

        /**
         * Set the value of poster
         *
         * @return  self
         */ 
        public function setPoster($poster)
        {
                $this->poster = $poster;

                return $this;
        }
    }
?>