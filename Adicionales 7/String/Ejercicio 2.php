<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<?php 
		$cadena="Tengo una hormiguita en la patita, que me esta haciendo cosquillitas y no me puedo aguantar";
		if(isset($_REQUEST['vocal'])){
			$vocal=$_REQUEST['vocal'];
			$cadena=str_replace(['a','e','i','o','u'], $vocal, $cadena);
			echo $cadena;
		}else{
			?>
			<form action="Ejercicio 2.php" method="post"> 
				Introduce una vocal:
				<input type="text" name="vocal" maxlength="1">
				<input type="Submit" value="Enviar">
			</form>
			<?php
		}
	 ?>
</body>
</html>