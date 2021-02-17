<?php 
    include "../Model/Alum_Asig.php";
    $aux=new Alumno($_REQUEST['matricula']);
    $data['alumno']=Alumno::getAlumnos();
    include "../View/modificarAlumnoFormulario.php";
?>