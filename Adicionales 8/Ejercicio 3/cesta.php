<?php 
	session_start();
	if(!isset($_SESSION['cont'])){
		header('Location:Ejercicico 3.php');
	}
	if(isset($_REQUEST['-monitor'])){
		if($_SESSION['monitor']>0){
		$_SESSION['monitor']--;
		$_SESSION['cont']--;
		$_SESSION['total']-=$_SESSION['productos']['monitor'];
		setcookie('monitor',$_SESSION['monitor'],time()+3600);
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
		}
	}
	if(isset($_REQUEST['-raton'])){
		if($_SESSION['raton']>0){
		$_SESSION['raton']--;
		$_SESSION['cont']--;
		$_SESSION['total']-=$_SESSION['productos']['raton'];
		setcookie('raton',$_SESSION['raton'],time()+3600);
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
	}
		
	}
	if(isset($_REQUEST['-teclado'])){
		if($_SESSION['teclado']>0){
		$_SESSION['teclado']--;
		$_SESSION['cont']--;
		$_SESSION['total']-=$_SESSION['productos']['teclado'];
		setcookie('teclado',$_SESSION['teclado'],time()+3600);
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
		}
	}
	if(isset($_REQUEST['-altavoz'])){
		if($_SESSION['altavoz']>0){
		$_SESSION['altavoz']--;
		$_SESSION['cont']--;
		$_SESSION['total']-=$_SESSION['productos']['altavoz'];
		setcookie('altavoz',$_SESSION['altavoz'],time()+3600);
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<style type="text/css">
		table,tr,td,th{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
 	<title>Cestas</title>
 	<?php
 	if(isset($_REQUEST['monitor'])){
		$_SESSION['monitor']++;
		$_SESSION['cont']++;
		$_SESSION['total']+=$_SESSION['productos']['monitor'];
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('monitor',$_SESSION['monitor'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
		?>
		<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Ejercicico 3.php">
		<?php
	}
	if(isset($_REQUEST['raton'])){
		$_SESSION['raton']++;
		$_SESSION['cont']++;
		$_SESSION['total']+=$_SESSION['productos']['raton'];
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('raton',$_SESSION['raton'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
		?>
		<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Ejercicico 3.php">
		<?php
	}
	if(isset($_REQUEST['teclado'])){
		$_SESSION['teclado']++;
		$_SESSION['cont']++;
		$_SESSION['total']+=$_SESSION['productos']['teclado'];
		setcookie('teclado',$_SESSION['teclado'],time()+3600);
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
		?>
		<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Ejercicico 3.php">
		<?php
	}
	if(isset($_REQUEST['altavoz'])){
		$_SESSION['altavoz']++;
		$_SESSION['cont']++;
		$_SESSION['total']+=$_SESSION['productos']['altavoz'];
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('cont',$_SESSION['cont'],time()+3600);
		setcookie('total',$_SESSION['total'],time()+3600);
		?>
		<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Ejercicico 3.php">
		<?php
	} 
 	 ?>
 </head>
 <body>
 	<table>
 		<tr>
 			<th>cantidad</th>
 			<th>Nombre</th>
 			<th>imagen</th>
 			<th>precio</th>
 			<th>Eliminar</th>
 		</tr>
 		<?php
 		if($_SESSION['monitor']>0){
 			?>
 			<tr>
 			<td><?=$_SESSION['monitor']?></td>
 			<td>Monitor</td>
 			<td><img src="imagenes/monitor.jpg" width="50px" height="50px"></td>
 			<td><?=$_SESSION['productos']['monitor']?></td>
 			<td><form action="cesta.php" method="post">
 				<input type="hidden" name="-monitor">
 				<input type="submit" value="Eliminar">
 			</form></td>
 		</tr>
 		<?php
 		} 
 		if($_SESSION['raton']>0){
 			?><tr>
 			<td><?=$_SESSION['raton']?></td>
 			<td>Raton</td>
 			<td><img src="imagenes/raton.jpg" width="50px" height="50px"></td>
 			<td><?=$_SESSION['productos']['raton']?></td>
 			<td><form action="cesta.php" method="post">
 				<input type="hidden" name="-raton">
 				<input type="submit" value="Eliminar">
 			</form></td>
 		</tr><?php
 			}
 			if($_SESSION['teclado']>0){
 				?>
 				<tr>
 			<td><?=$_SESSION['teclado']?></td>
 			<td>Teclado</td>
 			<td><img src="imagenes/teclado.jpg" width="50px" height="50px"></td>
 			<td><?=$_SESSION['productos']['teclado']?></td>
 			<td><form action="cesta.php" method="post">
 				<input type="hidden" name="-teclado">
 				<input type="submit" value="Eliminar">
 			</form></td>
 		</tr>
 				<?php
 			}
 			if($_SESSION['altavoz']>0){
 				?>
 				<tr>
 			<td><?=$_SESSION['altavoz']?></td>
 			<td>Altavoz</td>
 			<td><img src="imagenes/altavoz.jpg" width="50px" height="50px"></td>
 			<td><?=$_SESSION['productos']['altavoz']?></td>
 			<td><form action="cesta.php" method="post">
 				<input type="hidden" name="-altavoz">
 				<input type="submit" value="Eliminar">
 			</form></td>
 		</tr>
 				<?php
 			}
 		 ?>
 		
 		<tr>
 			<td colspan="2">Cantidad: <?=$_SESSION['cont']?></td>
 			<td colspan="3">Precio total: <?=$_SESSION['total']?></td>
 			<td><a href="Ejercicico 3.php">Volver</a></td>
 		</tr>
 	</table>
 </body>
 </html>