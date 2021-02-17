<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$cadena=ucwords($cadena);
			$aux=str_split($cadena);
			$apo=$aux[0];
			for ($i=0; $i < sizeof($aux); $i++) { 
				if($aux[$i]==" "){
					$apo.=$aux[$i+1];
				}
			}
			echo "$cadena<br>".strtoupper($apo);
		}else{
			?>
				<form action="Ejercicio 10.php" method="post">
					Introduce tu nombre completo:
					<input type="text" name="cadena"><br>
					<input type="submit" value="Enviar">
				</form>
			<?php
		}
	 ?>
</body>
</html>