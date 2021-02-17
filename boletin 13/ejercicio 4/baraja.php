<?php 
    if(isset($_REQUEST['num'])){
        $num=$_REQUEST['num'];
        if($num>0 && $num<41){
            $palo=["oro","basto","copa","espada"];
            $baraja=[];
            for ($i=0; $i < $num; $i++) { 
                $ap1=rand(0,3);
                $ap2=rand(1,12);
                $aux="$ap2 de $palo[$ap1]";
                if(in_array($aux,$baraja)){
                    $i--;
                }else{
                    $baraja[]=$aux;
                }
            }
            print json_encode($baraja);
        }else{
            $error="El numero introducido no puede ser mayor que 40 o menos que 1";
            print json_encode($error);
        }
    }
?>