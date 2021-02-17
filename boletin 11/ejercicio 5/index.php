<?php 
    session_start();
    if(isset($_REQUEST['borrar'])){
        session_destroy();
        header('Location: index.php');
    }
    if(!isset($_SESSION['bombillas']) && !isset($_SESSION['inte']) && !isset($_REQUEST['total'])){
        $_SESSION['bombillas']=[];
        $_SESSION['inte']=true;
        
    }
    $_SESSION['total']=0;
    include_once 'Bombilla.php';
    if(isset($_REQUEST['añadir'])){
        $lugar=$_REQUEST['lugar'];
        $potencia=$_REQUEST['potencia'];
        $estado=$_REQUEST['estado'];
        $aux=new bombilla($lugar,$potencia,$estado);
        $_SESSION['bombillas'][]=serialize($aux);
    }
    if(isset($_REQUEST['cambiar'])){
        $i=$_REQUEST['cambiar'];
        $aux=unserialize($_SESSION['bombillas'][$i]);
        $aux->pulsar();
        $_SESSION['bombillas'][$i]=serialize($aux);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Introduce la informacion:
        <input type="text" value="Lugar" name="lugar">
        <input type="number" value="Potencia" name="potencia">
        <select name="estado">
            <option value="0">Apagada</option>
            <option value="1">Encendida</option>
        </select>
        <input type="submit" name="añadir" value="Añadir"><br>
    </form>
    <form action="index.php" method="post">
        Borrar todas las Bombilla:
        <input type="submit" value="Borrar" name="borrar">
    </form>
    <hr><br>
    <?php 
        
    if(isset($_REQUEST['general'])){
        if($_SESSION['inte']){
            $_SESSION['inte']=false;
        }else{
            $_SESSION['inte']=true;
        }
        Bombilla::inte($_SESSION['inte']);
    }
    if(Bombilla::getFusible()){
        $foto="img/on.png";
    }else{
        $foto="img/off.png";
    }
    ?>
    <h2>General OFF <a href="index.php?general=1"><img src="<?=$foto?>"></a> ON</h2>
    <table>
            <tr>
            <?php 
            $cont=0;
                for ($i=0; $i < count($_SESSION['bombillas']); $i++) {
                    if($cont==5){
                        echo "</tr><tr>";
                        $cont=0;
                    }
                    $aux=unserialize($_SESSION['bombillas'][$i]);
                    ?><td style="border: 1px solid black; text-align: center;">
                        <a><?=$aux->getLugar()?></a><br>
                        <a href="index.php?cambiar=<?php echo $i?>"><?php if(Bombilla::getFusible()){
                            if($aux->getEstado()==1){
                                ?><img src="img/encendida.png"><?php
                            }else{
                                ?><img src="img/apagada.png"><?php
                            }
                        }else{?>
                            <img src="img/apagada.png"><?php
                        } ?></a>
                        <a href="index.php?cambiar=<?php echo $i?>">
                        <?php if($aux->getEstado()==1){
                            echo "Apagar";
                        }else{
                            echo "Encender";
                        }?></a><br>
                        <a>Potencia:<?=$aux->getPotencia()?> W</a><br>
                        <a><?php 
                        if(Bombilla::getFusible()){
                            if(($aux->getEstado()==1)){
                                echo "GASTO: ".$aux->getPotencia()." W";
                                $_SESSION['total']+=$aux->getPotencia();
                            }else{
                                echo "GASTO 0 W";
                            }
                        }else{
                            echo "GASTO 0 W";
                        }
                            
                        ?></a>
                    </td><?php
                    $cont++;
                }
            ?>
            </tr>
    </table>
    <h2>Gasto Total: <?=$_SESSION['total']?></h2>
</body>
</html>