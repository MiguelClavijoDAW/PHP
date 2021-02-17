<?php 
    include "../Model/Productos.php";
    $aux=new Productos($_REQUEST['codigo'],$_REQUEST['nombre'],$_REQUEST['precio'],$_REQUEST['stock']);
    $aux->modificar();
    header('location: ../Controller/index.php');
?>