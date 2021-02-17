<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ9</title>
</head>
<body>
	<?php 
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$x=round(sqrt((-$c)/(-$a-$b)),2);
		echo "El valor de X es $x";
	 ?>
</body>
</html>