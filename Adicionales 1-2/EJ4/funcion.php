<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ4</title>
</head>
<body>
	<?php 
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
		$promedio=($t1+$t2+$t3)/3;
		$di1=$t1-$promedio;
		$di2=$t2-$promedio;
		$di3=$t3-$promedio;
		echo "<table border=\"1\" style=\"border-collapse: collapse;\">
		<title>Comparacion de precion</title>
		<tr>
			<td>---</td>
			<td>Tienda 1</td>
			<td>Tienda 2</td>
			<td>Tienda 3</td>
		</tr>
		<tr>
			<td>Precio</td>
			<td>$t1</td>
			<td>$t2</td>
			<td>$t3</td>
		</tr>
		<tr>
			<td>Promedio</td>
			<td>---</td>
			<td>---</td>
			<td>---</td>
			<td>$promedio</td>
		</tr>
		<tr>
			<td>Diferendia</td>
			<td>$di1</td>
			<td>$di2</td>
			<td>$di3</td>
		</tr>
	</table>";
	 ?>
</body>
</html>