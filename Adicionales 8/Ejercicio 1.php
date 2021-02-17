<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	<?php 
		if(isset($_REQUEST["añadir"])){
			$color="rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")";
			$_SESSION['paleta'][]=$color;
			?>
				<style type="text/css">
					body{
						background-color: <?=$color?>
					}
				</style>
			<?php
			echo "Colores guardados: ".count($_SESSION['paleta']);
		}
		if(isset($_REQUEST["mostrar"])){
			echo "<table>";
			echo "<tr>";
			for ($i=1; $i <= sizeof($_SESSION['paleta']);$i++) {
					?>
					<td style="background-color: <?=$_SESSION['paleta'][$i-1]?>; width: 30px; height: 30px"></td>
					<?php
					if($i%5==0){
						echo "</tr><tr>";
					}
			}
			echo "</tr>";
			echo "</table>";
		}
		?>
		<form action="Ejercicio 1.php" method="post">
			<input type="hidden" name="añadir" value="0">
			<input type="submit" value="Generar color">
		</form>
		<form action="Ejercicio 1.php" method="post">
			<input type="hidden" name="mostrar" value="0">
			<input type="submit" value="Ver paleta">
		</form>
</body>
</html>