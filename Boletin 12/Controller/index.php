<?php 
    include "../Model/Articulo.php";
    $data['articulo']=Articulo::getArticulos();
    include "../View/lista.php";
?>