<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$aux="";
			$array1=str_split($cadena);
			$array2=new SplFixedArray(sizeof($array1));
			for ($i=0; $i < sizeof($array1); $i++) { 
				$array2[$i]=ord($array1[$i]);
				echo $array2[$i];
			}
			echo "<br>";
			for ($i=0; $i < sizeof($array2); $i++) { 
				$aux.=chr($array2[$i]);
			}
			echo $aux;
		}else{
			?>
				<form action="Ejercicio 8.php" method="post">
					Introduce una cadena:
					<input type="text" name="cadena"><br>
					<input type="submit" value="Enviar">
				</form>
			<?php
		}
	 ?>
</body>
</html>