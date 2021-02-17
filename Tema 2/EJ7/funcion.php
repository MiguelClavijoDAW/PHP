<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ7</title>
</head>
<body>
	<?php 
		$base=$_POST['base'];
		$IVA=$_POST['IVA'];
		$total=($base*$IVA)/100;
		$total+=$base;
		echo "El Importe base sin el iva es de $base con el $IVA % es de $total";
	 ?>
</body>
</html>