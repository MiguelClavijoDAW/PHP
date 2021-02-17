<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    	#t1{
   			float: left;
		}
		#t2{
    		float: left;
		}
    </style>
</head>

<body>
    <?php
    include("controlAcceso.php");
    if (isset($_REQUEST['cual'])) {


        $quien=$_REQUEST['cual'];
        $sol=dameTarjeta($quien);

        $letra=$_REQUEST['estaLetra'];
        $numero=$_REQUEST['numero'];
        $contra=$_REQUEST['contra'];
        $ultima=compruebaClave($sol,$letra,$numero,$contra);
        


        if ($ultima==false) {
            echo "<h1>INCORRECTO</h1>";
        } else {
            echo "<h1>CORRECTO</h1>";
        }
        
    }else{


    $array=[[" ","1","2","3","4"],["A","A1","A2","A3","A4"],["B","B1","B2","B3","B4"],["C","C1","C2","C3","C4"],["D","D1","D2","D3","D4"],["E","E1","E2","E3","E4"]];
    $array1=[[" ","1","2","3","4"],["A","1A","2A","3A","4A"],["B","1B","2B","3B","4B"],["C","1C","2C","3C","4C"],["D","1D","2D","3D","4D"],["E","1E","2E","3E","4E"]];
    ?>
    <div id="t1">
        <h2>Usuario</h2>
      <?php imprimeTarjeta($array); ?>
    </div>
    <div id="t2">
        <h2>Admin</h2>
        <?php imprimeTarjeta($array1); ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form action="Ej2.php" method="get">
        Selecciona como quiere entrar <br>
        <select name="cual">
            <option value="usuario">Usuario</option>
            <option value="admin">Admin</option>
        </select>
        <br>
        <br>
        Introduce el contenido de la celda <?php 
        $estaLetra=rand(1,4);
        $letra="";
        switch ($estaLetra) {
            case 1:
            $letra="A";
            break;
            case 2:
            $letra="B";
            break;
            case 3:
            $letra="C";
            break;
            case 4:
            $letra="D";
            break;
            case 5:
            $letra="E";
            break;
        }
        $numero=rand(1,4);
        echo $letra.$numero;
        ?>
        <input type="hidden" name="estaLetra" value="<?php  echo $estaLetra?>">
        <input type="hidden" name="numero" value="<?php echo $numero ?>">
        <br>
        <input type="text" name="contra"><br><br>
        <input type="submit">
    </form><?php 
	} ?>
</body>
</html>