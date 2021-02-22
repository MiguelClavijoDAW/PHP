<?php 
    include "../Model/Asignatura.php";
    $aux=new Asignatura(0,$_REQUEST['nombre']);
    $aux->añadir();
    header('Location: ../Controller/VerAsignatura.php');
?>