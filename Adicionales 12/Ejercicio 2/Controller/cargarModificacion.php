<?php 
    include "../Model/Alum_Asig.php";
    $aux=new Alumno($_REQUEST['matricula'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['curso']);
    $aux->modificar();
    header('Location: ../index.php');
?>