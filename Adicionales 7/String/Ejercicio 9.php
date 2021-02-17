<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$aux=str_split($cadena);
			for ($i=sizeof($aux)-1; $i >= 0 ; $i--) { 
				echo "$aux[$i]";
			}
		}else{
			?>
				<form action="Ejercicio 9.php" method="post">
					Introduce una frase:
					<input type="text" name="cadena">
					<br><input type="submit" value="Enviar">
				</form>
			<?php
		}
	 ?>
</body>
</html>