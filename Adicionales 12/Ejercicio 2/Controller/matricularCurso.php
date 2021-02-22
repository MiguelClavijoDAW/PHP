<?php 
    include "../Model/Alum_Asig.php";
    $data['asignatura']=Asignatura::getAsignatura();
    $data['modulo']=Alum_Asig::moduloAlumno($_REQUEST['matricula']);
    $noMatricula=[];
    foreach ($data['asignatura'] as $asig) {
        $bandera=false;
        foreach ($data['modulo'] as $modulo) {
            if($asig->getCodigo()==$modulo->getCodigo()){
                $bandera=true;
                break;
            }
        }
        if(!$bandera){
            $noMatricula[]=$asig;
        }
    }
    include "../View/matriculaModuloFormulario.php";
?>