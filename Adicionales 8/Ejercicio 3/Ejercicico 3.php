<?php 
	session_start();
	if(!isset($_SESSION['cont'])){
		if(isset($_COOKIE['cont'])){
		$_SESSION['cont']=$_COOKIE['cont'];
		$_SESSION['productos']=['monitor'=>200,'raton'=>50,'teclado'=>75,'altavoz'=>120];
		$_SESSION['monitor']=$_COOKIE['monitor'];
		$_SESSION['raton']=$_COOKIE['raton'];
		$_SESSION['teclado']=$_COOKIE['teclado'];
		$_SESSION['altavos']=$_COOKIE['altavoz'];
		}else{
		$_SESSION['cont']=0;
		$_SESSION['productos']=['monitor'=>200,'raton'=>50,'teclado'=>75,'altavoz'=>120];
		$_SESSION['monitor']=0;
		$_SESSION['raton']=0;
		$_SESSION['teclado']=0;
		$_SESSION['altavoz']=0;	
		$_SESSION['total']=0;
		setcookie('total',$_SESSION['total'],time()+3600);	
		setcookie('monitor',$_SESSION['monitor'],time()+3600);
		setcookie('raton',$_SESSION['raton'],time()+3600);
		setcookie('teclado',$_SESSION['teclado'],time()+3600);
		setcookie('altavoz',$_SESSION['altavoz'],time()+3600);
		setcookie('cont',$_SESSION['cont'],time()+3600);}
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
	<style type="text/css">
		table,tr,td,th{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table >
		<tr>
			<th colspan="3">TIENDA</th>
			<th><a href="cesta.php">Cesta: <?=$_SESSION['cont']?></a></th>
		</tr>
		<tr>
			<td><strong>Nombre</strong></td>
			<td><strong>Imagen</strong></td>
			<td><strong>Precio</strong></td>
			<td><strong>Añadir</strong></td>
		</tr>
		<tr>
			<td>Monitor</td>
			<td><img src="imagenes/monitor.jpg" width="50px" height="50px"></td>
			<td><?=$_SESSION['productos']['monitor']?></td>
			<td><form action="cesta.php" method="post">
				<input type="hidden" name="monitor">
				<input type="submit" value="comprar">
			</form></td>
		</tr>
		<tr>
			<td>Raton</td>
			<td><img src="imagenes/raton.jpg" width="50px" height="50px"></td>
			<td><?=$_SESSION['productos']['raton']?></td>
			<td><form action="cesta.php" method="post">
				<input type="hidden" name="raton">
				<input type="submit" value="comprar">
			</form></td>
		</tr>
		<tr>
			<td>Teclado</td>
			<td><img src="imagenes/teclado.jpg" width="50px" height="50px"></td>
			<td><?=$_SESSION['productos']['teclado']?></td>
			<td><form action="cesta.php" method="post">
				<input type="hidden" name="teclado">
				<input type="submit" value="comprar">
			</form></td>
		</tr>
		<tr>
			<td>Altavoz</td>
			<td><img src="imagenes/altavoz.jpg" width="50px" height="50px"></td>
			<td><?=$_SESSION['productos']['altavoz']?></td>
			<td><form action="cesta.php" method="post">
				<input type="hidden" name="altavoz">
				<input type="submit" value="comprar">
			</form></td>
		</tr>
	</table>
</body>
</html>