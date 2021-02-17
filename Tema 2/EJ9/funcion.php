<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ9</title>
</head>
<body>
	<?php 
		$radio=$_POST['radio'];
		$altura=$_POST['altura'];
		$volumen=1/3*3.14*($radio*$radio)*$altura;
		echo "El volumen del cono es de ".$volumen;
	 ?>
</body>
</html>