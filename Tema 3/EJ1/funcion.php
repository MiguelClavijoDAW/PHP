<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ1</title>
</head>
<body>
	<?php 
		$dia=$_POST['dia'];
		switch ($dia) {
			case 'lunes':
				echo "El lunes toca a primera DEWC";
				break;
			case 'martes':
				echo "El martes toca a primera DEWC";
				break;
			case 'miercoles':
				echo "El miercoles toca a primera EIE";
				break;
			case 'jueves':
				echo "El jueves toca a primera DEWS";
				break;
			case 'viernes':
				echo "El viernes toca a primera LC";
				break;
			default:
				echo "Dia no encontrado";
				break;
		}
	 ?>
</body>
</html>