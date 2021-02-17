<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 11</title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$array=str_split(strtoupper($cadena));
			$suma=0;
			for ($i=0; $i < sizeof($array); $i++) { 
				if($array[$i]=='M'){
					$suma+=1000;
				}else if($array[$i]=='D'){
					$suma+=500;
				}else if($array[$i]=='C'){
					$suma+=100;
				}else if($array[$i]=='L'){
					$suma+=50;
				}else if($array[$i]=='X'){
					$suma+=10;
				}else if($array[$i]=='V'){
					$suma+=5;
				}else if($array[$i]=='I'){
					$suma+=1;
				}
			}
			echo "El numero $cadena en decimal es $suma";
		}else{
			?>
			<form action="Ejercicio 11.php" method="post">
				<laber>Introduce un numero romano:</laber>
				<input type="text" name="cadena">
				<br>
				<input type="submit" value="Comprobar">
			</form>
			<?php
		}
	 ?>
</body>
</html>