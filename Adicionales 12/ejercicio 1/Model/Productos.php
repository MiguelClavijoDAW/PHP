<?php 
session_start();
    include "../Model/TiendaDB.php";
    Class Productos{
        private $codigo;
        private $nombre;
        private $precio;
        private $stock;

        function __construct($codigo=0,$nombre="",$precio=0,$stock=0)
        {
            $this->codigo=$codigo;
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->stock=$stock;
        }

        function insertar(){
            $conexion=TiendaDB::connectDB();
            $sql="INSERT INTO productos (codigo,nombre,precio,stock) VALUE ('$this->codigo','$this->nombre','$this->precio','$this->stock')";
            $conexion->exec($sql);
        }

        function borrar(){
            $conexion=TiendaDB::connectDB();
            $conexion->exec("DELETE FROM productos WHERE codigo='$this->codigo'");
        }

        function modificar(){
            $conexion=TiendaDB::connectDB();
            $conexion->exec("UPDATE productos SET nombre='$this->nombre', precio='$this->precio', stock='$this->stock' WHERE codigo='$this->codigo'");
        }

        public static function getProductos(){
            $conexion=TiendaDB::connectDB();
            $sql="SELECT * FROM productos";
            $consulta=$conexion->query($sql);
            $productos=[];
            while($registro=$consulta->fetchObject()){
                $productos[]=new Productos($registro->codigo,$registro->nombre,$registro->precio,$registro->stock);        
            } 
            return $productos;
        }

        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
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

                return $this;
        }

        /**
         * Get the value of stock
         */ 
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */ 
        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }
    }
?>