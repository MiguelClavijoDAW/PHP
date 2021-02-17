<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<form action="funcion.php" method="post">
		<?php
			for ($i=1; $i < 50; $i++) { 
			 	?>
			 	<input type="checkbox" name="<?=$i?>"><?=$i?>
			 	<?php
			 	if($i%7==0){
			 		?><br><?php
			 	}
			 } 
		 ?>
		 <input type="submit" value="Comprobar">
	</form>
</body>
</html>