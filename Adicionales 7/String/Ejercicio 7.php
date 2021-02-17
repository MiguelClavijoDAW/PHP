<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$frase="Verificar si en una frase se encuentra una determinada palabra pedida al usuario.";
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$po=mb_stripos($frase, $cadena);
			if($po!=false){
				echo "La palabra esta en la frase";
			}else{
				echo "La palabra no esta en la frase";
			}
		}else{
			echo "$frase";
			?>
			<form action="Ejercicio 7.php" method="post">
				<br>
				Introduce una palabra a buscar:
				<input type="text" name="cadena">
				<br>
				<input type="submit" value="Buscar">
			</form>
			<?php
		}
	 ?>
</body>
</html>