<?php 
    include "../Model/Articulo.php";
    $codigo=$_REQUEST['codigo'];
    $data['articulo']=Articulo::getArticulos();
    include "../View/formularioModificar.php";
?>