<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ1</title>
</head>
<body>
	<?php 
		$r=$_POST['r'];
		$h=$_POST['h'];
		$vol=3.14*($r*$r)*$h;
		echo "<h1 style=\"color: red\">Calcular Volumen de un cilindro</h1><br>";
		echo "El Volumen del cilindro es de $vol";
		echo "<img src=\"cilindro.jpg\">";
	 ?>
</body>
</html>