<?php 
    include "../Model/Alumno.php";
    if(isset($_REQUEST['error'])){
        if($_REQUEST['error']==0){
            ?><script>alert("La matricula del usuario ya estaba en la base de datos")</script><?php
        }else{
            ?><script>alert("Usuario añadido correctamente")</script><?php
        }
    }
    $data['alumnos']=Alumno::getAlumnos();
    include "../View/listado.php";
?>