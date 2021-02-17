<?php session_start() ?>
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
		if(!isset($_SESSION['mascotas'])){
			$_SESSION['mascotas']=[];
		}
		$fecha='#'.date("d-m-Y").'#';
		if(isset($_POST['cargar'])){
			if(verFecha($fecha)){
				$file=fopen("mascotas.txt","a");
				for ($i=0; $i < count($_SESSION['mascotas']); $i++) { 
					$aux=$_SESSION['mascotas'][$i][0]."-".$_SESSION['mascotas'][$i][1]."-".$_SESSION['mascotas'][$i][2];
					fwrite($file, $aux.PHP_EOL);
				}
				fclose($file);
			}else{
				$file=fopen("mascotas.txt","a");
				fwrite($file,$fecha.PHP_EOL);
				for ($i=0; $i < count($_SESSION['mascotas']); $i++) { 
					$aux=$_SESSION['mascotas'][$i][0]."-".$_SESSION['mascotas'][$i][1]."-".$_SESSION['mascotas'][$i][2];
					fwrite($file, $aux.PHP_EOL);
				}
				fclose($file);
			}
			unset($_SESSION['mascotas']);
			$_SESSION['mascotas']=[];
		}else if(isset($_POST['añadir'])){
			$_SESSION['mascotas'][]=[$_POST['nombre'],$_POST['raza'],$_POST['edad']];
		}
	 ?>
	 <table>
	 	<tr>
	 		<th colspan="4">Lista mascotas</th>
	 	</tr>
	 	<tr>
	 		<th>Nombre</th>
	 		<th>Raza</th>
	 		<th>Edad</th>
	 		<th>Añadir</th>
	 	</tr>
	 	<?php
	 		for ($i=0; $i < sizeof($_SESSION['mascotas']); $i++) { 
	 		 	?>
	 		 	<tr>
	 		 	<td><?=$_SESSION['mascotas'][$i][0]?></td>
	 		 	<td><?=$_SESSION['mascotas'][$i][1]?></td>
	 		 	<td><?=$_SESSION['mascotas'][$i][2]?></td>
	 		 	<td></td>
	 		 </tr>
	 		 	<?php
	 		 } 
	 	 ?>
	 	 <form action="Ejercicio 1.php" method="post">
	 	 	<tr>
	 	 	<td><input type="text" name="nombre"></td>
	 	 	<td><input type="text" name="raza"></td>
	 	 	<td><input type="number" name="edad"></td>
	 	 	<td><input type="submit" value="Añadir" name="añadir"></td>
	 	 	</tr>
	 	 </form>
	 	
	 </table>
	 <form action="Ejercicio 1.php" method="post">
	 	<a>Cargar en la lista: </a>
	 	<input type="submit" name="cargar" value="Cargar">
	 </form>
</body>
</html>
<?php 
	function verFecha($fecha){
		$fecha=$fecha.PHP_EOL;
		$lineas=file("mascotas.txt");
		return in_array($fecha,$lineas);
	}
 ?>