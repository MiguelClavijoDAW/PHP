<?php 
    include "../Model/Alumno.php";
    $nuevo=new Alumno($_REQUEST['matricula'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['curso']);
    $data['alumnos']=Alumno::getAlumnos();
    foreach ($data['alumnos'] as $alumno) {
        if($alumno->getMatricula()==$nuevo->getMatricula()){
            header('Location: ../Controller/index.php?error=0');
        }
    }
    $nuevo->añadir();
    header('Location: ../Controller/index.php?error=1');
?>