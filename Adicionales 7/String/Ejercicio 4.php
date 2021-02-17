<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$aux=mb_stripos($cadena," ");
			$palabra1=substr($cadena,0,$aux);
			$aux=strpos($cadena," ");
			$palabra2=substr($cadena,strlen($cadena)-$aux);
			if(strtolower($palabra1)==strtolower($palabra2)){
				echo "Son iguales";
			}else{
				echo "Son diferentes";
			}
		}else{
			?>
			<form action="Ejercicio 4.php" method="post">
				Introduce la cadena:
				<input type="text" name="cadena">
				<br>
				<input type="submit" value="Enviar">
			</form>
			<?php
		}
	 ?>
</body>
</html>