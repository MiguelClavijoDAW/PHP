<?php 
    include "../Model/Alumno.php";
    $data['alumnos']=Alumno::getAlumnos();
    $fp=fopen("../listadoAlumno.txt","w");
    foreach ($data["alumnos"] as $alumno) {
        fputs($fp,$alumno->imprimir().PHP_EOL);
    }
    header('Location: ../index.php');
?>