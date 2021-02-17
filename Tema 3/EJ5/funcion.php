<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ5</title>
</head>
<body>
	<?php 
		$a=$_POST['n1'];
		$b=$_POST['n2'];
		if($a==0){
			echo "No existe solucion porque has es 0";
		}else{
			$sol=-$b/$a;
			echo "El valor de X es ".$sol;
		}
		
	 ?>
</body>
</html>