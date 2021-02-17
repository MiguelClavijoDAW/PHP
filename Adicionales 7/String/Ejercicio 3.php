<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
	<?php 
		$cadena="Hola Mundo que tal todo bien espero y eso me alegro";
		$cont=0;
		for ($i=0; $i < strlen($cadena); $i++) { 
			if($cadena[$i]==" "){
				$cont++;
			}
		}
		$cont++;
		echo "La cadena: $cadena tiene $cont palabras";
	 ?>
</body>
</html>