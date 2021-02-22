<?php 
    include "../Model/Asignatura.php";
    $aux=new Asignatura($_REQUEST['codigo']);
    $aux->eliminar();
    header('Location: ../index.php');
?>