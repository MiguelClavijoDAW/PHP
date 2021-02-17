<?php 
    if(isset($_REQUEST["p"])){
        $peseta=$_REQUEST['p'];
        $euro=$peseta/166.3860;
        print json_encode($euro);
    }else if(isset($_REQUEST['e'])){
        $euro=$_REQUEST['e'];
        $peseta=$euro*166.3860;
        print json_encode($peseta);
    }
?>