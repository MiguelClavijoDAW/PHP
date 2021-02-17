<?php 
    include "../Model/Alum_Asig.php";
    $aux=new Alum_Asig($_REQUEST['matricula'],$_REQUEST['codigo']);
    $aux->añadir();
    header('Location: ../Controller/index.php');
?>