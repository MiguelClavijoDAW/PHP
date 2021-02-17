<?php 
    class factura{
        private static $iva=0.21;

        /**
         * Get the value of iva
         */ 
        public function getIva()
        {
                return $this->iva;
        }

        /**
         * Set the value of iva
         *
         * @return  self
         */ 
        public function setIva($iva)
        {
                $this->iva = $iva;

                return $this;
        }
        private $fecha;
        private $importeBase;
        private $estado;
        private $productos;

        function __construct($fecha)
        {
            $this->fecha=$fecha;
            $this->importeBase=0;
            $this->estado=false;
            $this->productos=[];
        }
        function pagar(){
            $this->estado=true;
        }

        function añadirProducto($nom,$precio,$canti){
            $aux=[$nom,$precio,$canti];
            $this->productos[]=$aux;
            $this->importeBase+=($precio*$canti);
        }
         function imprimeFactura(){
             ?>
            <table>
                <tr>
                    <th colspan="4">FECHA: <?=$this->fecha?></th>
                </tr>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                <?php 
                    for ($i=0; $i < count($this->productos); $i++) { 
                        ?>
                        <tr>
                            <td><?=$this->productos[$i][0]?></td>
                            <td><?=$this->productos[$i][1]?></td>
                            <td><?=$this->productos[$i][2]?></td>
                            <td><?=$this->productos[$i][2]*$this->productos[$i][1]?></td>
                        </tr>
                        <?php
                    }
                ?>
                <tr>
                    <td colspan="2" >Total sin IVA</td>
                    <td colspan="2" style="text-align: right;"><?=$this->importeBase?></td>
                </tr>
                <tr>
                    <td colspan="2" >Total con IVA</td>
                    <td colspan="2" style="text-align: right;"><?=$this->importeBase*(1+Factura::$iva)?></td>
                </tr>
                
            </table>
             <?php
             if($this->estado){
              ?><h2 style="color: green;">PAGADO</h2><?php   
             }else{
                ?><h2 style="color: red;">PENDIENTE</h2><?php 
             }
         }
        

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of importeBase
         */ 
        public function getImporteBase()
        {
                return $this->importeBase;
        }
    }
?>