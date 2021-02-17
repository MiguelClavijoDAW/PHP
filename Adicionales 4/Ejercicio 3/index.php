<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
	<table>
		<?php 
			$cont=1;
			for ($i=0; $i < 3; $i++) { 
				?>
				<tr>
				<?php
				for ($f=0; $f < 3; $f++) {
					?>
					<td><a href="funcion.php?a=<?=$cont?>"><img src="imagenes/gris.jpg"></a></td>
					<?php
					$cont++;
				}
				?>
				</tr>
				<?php
			}
		 ?>
	</table>
	<form action="funcion.php" method="post">
		<input type="text" name="palabra">
		<input type="submit" value="Comprobar">
	</form>
</body>
</html>