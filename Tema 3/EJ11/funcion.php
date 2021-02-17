<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ11</title>
</head>
<body>
	<?php 
		$hora=$_POST['hora'];
		$min=$_POST['min'];
		$seg=($min*60)+($hora*3600);
		$resul=86400-$seg;
		echo "Quedan $resul segundos para media noche";
	 ?>
</body>
</html>