<?php 
    include "../Model/Productos.php";
    $aux=new Productos($_REQUEST['codigo']);
    $aux->borrar();
    header('location: ../Controller/index.php');
?>