<?php 
    include 'CocheLujo.php';
    if(isset($_REQUEST['destruir'])){
        session_destroy();
        header('Location: index.php');
    }
    // if(!isset($_SESSION['modeloCaro'])){
    //     $_SESSION['modeloCaro']="";
    //     $_SESSION['precioCaro']=0;
    // }
    if(!isset($_SESSION['coches'])){
        $_SESSION['coches']=[];
    }
    if(isset($_REQUEST['añadir'])){
         if($_REQUEST['suplemento']!=0){
             $aux=new CocheLujo($_REQUEST['matricula'],$_REQUEST['modelo'],$_REQUEST['precio'],$_REQUEST['suplemento']);
            $_SESSION['coches'][]=serialize($aux);
        }else{
            $aux=new Coche($_REQUEST['matricula'],$_REQUEST['modelo'],$_REQUEST['precio']);
            $_SESSION['coches'][]= serialize($aux);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        Matricula: <input type="text" name="matricula">
        Modelo: <input type="text" name="modelo">
        Precio: <input type="number" name="precio">
        Suplemento: <input type="number" name="suplemento" value="0">
        <input type="submit" name="añadir" value="Añadir">
    </form>
    <form action="index.php" method="post">
        <input type="submit" name="destruir" value="Borrar Todo">
    </form>
    <hr>
    <br>
    <?php echo "<p>Coche mas Caro: Modelo: $_SESSION[modeloCaro] Precio: $_SESSION[precioCaro]</p>"; ?>
        
    <table>
        <tr>
            <th>Matricula</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Suplemento</th>
        </tr>
        <?php 
            for ($i=0; $i < count($_SESSION['coches']); $i++) { 
                $aux=unserialize($_SESSION['coches'][$i]);
                echo "<tr>";
                 if(get_class($aux)=='Coche'){-
                    echo $aux."<td>No Procede</td>";
                }else{
                    echo $aux;
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>