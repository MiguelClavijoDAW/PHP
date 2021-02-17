<?php 
    include "../Model/Productos.php";
    $cod=$_REQUEST['codigo'];
    $data['productos']=Productos::getProductos();
    include "../View/modificarFormulario.php";
?>