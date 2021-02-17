<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 13</title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$cadena=trim($cadena);
			$array=explode(' ',$cadena);
			$posi=0;
			$a=0;
			$masA=0;
			for ($i=0; $i < sizeof($array); $i++) { 
				if (strlen($array[$i])>strlen($array[$posi])) {
					$posi=$i;
				}
				if(strlen($array[$i])>=8 && strlen($array[$i])<=16){
					for ($f=0; $f < strlen($array[$i]); $f++) { 
						if($array[$i][$f]=="a" || $array[$i][$f]=="A"){
							$a++;
						}
					}
				}
				if($a>=3){
					$masA++;
				}
				$a=0;
			}
			$posi=mb_stripos($cadena,$array[$posi]);
			echo "La palabra mas larga comiensa en la posision $posi <br>En la frace ahi mas de $masA palabras con mas de tres a";
		}else{
			?>
				<form action="Ejercicio 13.php" method="post">
					<label>Introduce una frase: </label>
					<input type="text" name="cadena">
					<br>
					<input type="submit" value="Enviar">
				</form>
			<?php
		}
	 ?>
</body>
</html>