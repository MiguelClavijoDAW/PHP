<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ8</title>
</head>
<body>
	<?php 
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$media=round(($n1+$n2+$n3)/3);
		echo "La media de las notas $n1 | $n2 | $n3 es $media<br>";
		switch ($media) {
			case 0:
			case 1:
			case 2:
			case 3:
			case 4:
				echo "Insuficiente";
				break;
			case 5:
				echo "Suficiente";
				break;
			case 6:
				echo "Bien";
				break;
			case 7:
			case 8:
				echo "Notable";
				break;
			case 9:
			case 10:
				echo "Sobresaliente";
				break;
			default:
				echo "La nota no es encontrada";
				break;
		}

	 ?>
</body>
</html>