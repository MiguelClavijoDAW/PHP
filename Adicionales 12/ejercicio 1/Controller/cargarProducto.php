<?php 
    include "../Model/Productos.php";
    $aux=new Productos($_REQUEST['codigo'],$_REQUEST['nombre'],$_REQUEST['precio'],$_REQUEST['stock']);
    $data['productos']=Productos::getProductos();
    foreach ($data['productos'] as $productos) {
        if($productos->getCodigo()==$aux->getCodigo()){
            header('location: ../Controller/index.php?error=1');
            die;
        }
    }
    $aux->insertar();
    header('location: ../Controller/index.php');
?>