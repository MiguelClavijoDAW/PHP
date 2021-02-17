<!DOCTYPE html>
<html>
<head>
	<title>funcion ej2</title>
</head>
<body>
	<?php 
		$hora=$_POST['hora'];
		if($hora>=6 && $hora<=12){
			echo "Buenos Dias";
		}else if($hora>=13 && $hora<=20){
			echo "Buenas Tardes";
		}else{
			echo "Buenas Noches";
		}
	 ?>
</body>
</html>