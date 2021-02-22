<?php 
    include "../Model/Alum_Asig.php";
    $aux=new Alum_Asig($_REQUEST['matricula'],$_REQUEST['codigo']);
    $aux->eliminar();
    header('Location: ../index.php');
?>