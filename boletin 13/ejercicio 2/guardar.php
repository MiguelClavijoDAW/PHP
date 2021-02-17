<?php 
    include "Pelicula.php";
    $aux=new Pelicula($_REQUEST['titulo'],$_REQUEST['año'],$_REQUEST['director'],$_REQUEST['duracion'],$_REQUEST['genero'],$_REQUEST['poster']);
    //print_r($aux);
    $aux->insertar();
    header('Location: index.php');
?>