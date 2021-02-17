<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ4</title>
</head>
<body>
	<?php 
		$a=$_POST['a'];
		$b=$_POST['b'];
		$suma=$a+$b;
		$resta=$a-$b;
		echo "Suma: $a + $b = ".$suma."<br>";
		echo "Resta: $a - $b = ".$resta."<br>";
		echo "Multiplicacion: $a * $b = ".$a*$b."<br>";
		echo "Division: $a / $b = ".$a/$b."<br>";
	 ?>
</body>
</html>