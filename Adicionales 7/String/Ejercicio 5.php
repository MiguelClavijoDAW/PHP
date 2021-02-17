<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$aux=strlen($cadena);
			$aux2=str_split($cadena);
			$apo2="";
			while ( $aux > 0) {
				$apo=$aux2[strlen($cadena)-1];
				for ($i=sizeof($aux2)-1; $i > 0; $i--) { 
					$aux2[$i]=$aux2[$i-1];
				}
				$aux2[0]=$apo;
				for ($i=0; $i < sizeof($aux2); $i++) { 
					$apo2.=$aux2[$i];
				}
				echo "$apo2,";
				$aux--;
				$apo2="";
			}
		}else{
			?>
				<form action="Ejercicio 5.php" method="post">
					Introduce una palabra:
					<input type="text" name="cadena">
					<br>
					<input type="submit" value="Enviar">
				</form>
			<?php
		} 
	 ?>
</body>
</html>