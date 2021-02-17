<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$aux=strpos($cadena,".");
			$g1=substr($cadena,0,$aux);
			$g2=substr($cadena,$aux+1);
			$cont=0;
			$cont2=0;
		for ($i=0; $i < strlen($g1); $i++) { 
			if($g1[$i]==" "){
				$cont++;
			}
		}
		$cont++;
		for ($i=0; $i < strlen($g2); $i++) { 
			if($g2[$i]==" "){
				$cont2++;
			}
		}
		$cont2++;
		echo "La primera parte de la frace tiene $cont palabras y la segunda tiene $cont2 palabras";
		}else{
			?>
				<form action="Ejercicio 6.php" method="post">
					Introduce dos separadas con un punto
					<input type="text" name="cadena"><br>
					<input type="submit" value="Enviar">
				</form>
			<?php
		}

	 ?>
</body>
</html>