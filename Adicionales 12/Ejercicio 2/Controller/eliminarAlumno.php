<?php 
    include "../Model/Alum_Asig.php";
    $aux=new Alumno($_REQUEST['matricula']);
    $aux->eliminar();
    header('Location: ../index.php');
?>