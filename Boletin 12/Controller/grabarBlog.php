<?php 
    include "../Model/Articulo.php";
    $entrada=new Articulo($_REQUEST['titulo'],$_REQUEST['texto']);
    $entrada->insertar();
    header('Location: index.php');
?>