<?php 
    include "../Model/Productos.php";
    if(isset($_REQUEST['error'])){
        ?><script>alert("ESE CODIGO YA ESTA EN LA BASE DE DATOS")</script><?php
    }
    $data['productos']=Productos::getProductos();
    include "../View/lista.php";
?>