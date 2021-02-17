<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ4</title>
</head>
<body>
	<?php 
		$hora=$_POST['hora'];
		$cost=40*12;
		$sueldo;
		if($hora<=40){
			$sueldo=$hora*12;
			echo "El sueldo del trabajador es ".$sueldo;
		}else{
			$hora-=40;
			$sueldo=(($hora*16)+$cost);
			echo "El sueldo del trabajador es ".$sueldo;
		}
	 ?>
</body>
</html>