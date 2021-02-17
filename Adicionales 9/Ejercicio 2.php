<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,th,td{
			border-collapse: collapse;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php
		if (!isset($_SESSION['mascotas'])) {
		 	$_SESSION['mascotas']=[];
		 }
		 if (isset($_REQUEST['fecha'])) {
		  	unset($_SESSION['mascotas']);
		  	$fecha='#'.$_REQUEST['fecha'].'#';
		  	$file=fopen("mascotas.txt","r");
		  	do{
		  		$linea=trim(fgets($file));
		  	}while($linea!=$fecha && !feof($file));
		  	do{
		  		$linea=fgets($file);
		  		if(substr($linea,0,1)!='#'&& $linea!=""){
		  			$aux=explode('-',$linea);
		  			$_SESSION['mascotas'][$aux[0]]=[$aux[1],$aux[2]];
		  		}
		  	}while(substr($linea,0,1)!='#'&& !feof($file));
		  	echo "<table>";
		  	echo '<tr><th colspan="4">FECHA:'.$fecha.'</th></tr>';
		  	echo "<tr><th>Nombre</th><th>Raza</th><th>Edad</th></tr>";
		  	if(isset($_SESSION['mascotas'])){
		  		foreach ($_SESSION['mascotas'] as $nombre => $mascota) {
		  			echo "<tr><td>$nombre</td><td>$mascota[0]</td><td>$mascota[1]</td></tr>";
		  		}
		  	}
		  	echo "</table>";
		  	fclose($file);
		  }
		  $file=fopen('mascotas.txt','r');
		  $fecha=[];
		  $linea=trim(fgets($file));
		  while (!feof($file)) {
		  	if(substr($linea,0,1)=='#'){
		  		$fecha[]=substr($linea,1,-1);
		  	}
		  	$linea=trim(fgets($file));
		  }
		  fclose($file);
	 ?>
	 <br>
	 <hr>
	 <br>
	 <form action="Ejercicio 2.php" method="post"> 
	 	Seleccione una fecha:
	 	<select name="fecha">
	 		<?php foreach ($fecha as $fecha){
	 			echo "<option value=$fecha>$fecha</option>";
	 		} ?>
	 	</select>
	 	<input type="submit" value="Cargar">
	 </form>
</body>
</html>