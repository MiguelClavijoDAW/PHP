<?php 
    include "../Model/Asignatura.php";
    $data['asignatura']=Asignatura::getAsignatura();
    include "../View/listadoAsignatura.php";
?>