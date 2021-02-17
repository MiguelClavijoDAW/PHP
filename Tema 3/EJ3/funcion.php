<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ3</title>
</head>
<body>
	<?php 
		$dia=$_POST['dia'];
		switch ($dia) {
			case 1:
				echo "Lunes";
				break;
			case 2:
				echo "Martes";
				break;
			case 3:
				echo "Miercoles";
				break;
			case 4:
				echo "Jueves";
				break;
			case 5:
				echo "Viernes";
				break;
			case 6:
				echo "Sabado";
				break;
			case 7:
				echo "Domingo";
				break;
			
			default:
				echo "Dia no encontrado";
				break;
		}
	 ?>
</body>
</html>