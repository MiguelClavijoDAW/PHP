<?php 
    include "../Model/Articulo.php";
    $data['articulo']=Articulo::getArticulos();
    foreach ($data['articulo'] as $articulo) {
        if($articulo->getCodigo()==$_REQUEST['codigo']){
            $articulo->setTitulo($_REQUEST['titulo']);
            $articulo->setTexto($_REQUEST['texto']);
            $articulo->modificar();
            header('location: index.php');
        }
    }

?>