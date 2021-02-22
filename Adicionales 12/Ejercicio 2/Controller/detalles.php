<?php 
    include "../Model/Alum_Asig.php";
    $aux=new Alum_Asig($_REQUEST['matricula']);
    $data['alumno']=Alumno::getAlumnos();
    $data['asignatura']=Asignatura::getAsignatura();
    $data['alumnoAsig']=$aux->asignaturas();
    include "../View/listadoDetalle.php";
?>