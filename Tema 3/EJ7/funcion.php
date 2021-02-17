<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ7</title>
</head>
<body>
	<?php 
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$media=($n1+$n2+$n3)/3;
		echo "La media de las notas $n1 | $n2 | $n3 es $media";
	 ?>
</body>
</html>