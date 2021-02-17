<?php 
    include "../Model/Articulo.php";
    $codigo=$_REQUEST['codigo'];
    $data['articulo']=Articulo::getArticulos();
    foreach ($data['articulo'] as $articulo) {
        if($articulo->getCodigo()==$codigo){
            $articulo->borrar();
            header('location: index.php');
        }
    }
?>