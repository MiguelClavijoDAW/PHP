<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ6</title>
</head>
<body>
	<?php 
		$h=$_POST['h'];
		$divi=(2*$h)/9.81;
		if($divi<0){
			echo "El valor no existe";
		}else{
			echo "El tiempo que tardaria en segundo es ".round(sqrt($divi),2)."s";
		}
	 ?>
</body>
</html>