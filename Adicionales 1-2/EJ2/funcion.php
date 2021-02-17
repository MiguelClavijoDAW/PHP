<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ2</title>
</head>
<body>
	<?php 
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$num3=$_POST['num3'];
		$num4=$_POST['num4'];
		$num5=$_POST['num5'];
		$num6=$_POST['num6'];
		$serie=$_POST['serie'];
		$gana1=rand(1,49);
		$gana2=rand(1,49);
		$gana3=rand(1,49);
		$gana4=rand(1,49);
		$gana5=rand(1,49);
		$gana6=rand(1,49);
		echo "El numero ganador es $gana1 $gana2 $gana3 $gana4 $gana5 $gana6 y el tuyo es $num1 $num2 $num3 $num4 $num5 $num6"

	 ?>
</body>
</html>