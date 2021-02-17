<!DOCTYPE html>
<html>
<head>
	<title>Caja Fuerte</title>
</head>
<body>
	<?php 	
			$nsecreto=1234;
			if(isset($_POST['num'])){
			$num=$_POST['num'];
			$intentos=$_POST['intentos'];

			if($num==$nsecreto){
				echo "La caja fuerte se ha abierto";
			}else{
				if($intentos==1){
					echo "Lo sientos te has quedado sin intentos";
				}else{
					?>
					Tienes <?=--$intentos?> para acertar la contraseña<br>
					introduce la contraseña:
					<form action="Ejercicio 7.php" method="post">
						<input type="number" name="num">
						<input type="hidden" name="intentos" value="<?= $intentos?>">
						<input type="submit" Value="Abrir">
					</form>
					<?php
				}
			}
		} else {?>
					Tienes 5 para acertar la contraseña<br>
					introduce la contraseña:
					<form action="Ejercicio 7.php" method="post">
						<input type="number" name="num">
						<input type="hidden" name="intentos" value="5">
						<input type="submit" Value="Abrir">
					</form>
		<?php }	?>
</body>
</html>