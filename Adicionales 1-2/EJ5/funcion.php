<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ5</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$di=$_POST['di']/2;
		$h=$_POST['h'];
		$cau=$_POST['cau'];
		$vol=3.14*($di*$di)*$h;
		$vol*=1000;
		$tiempo=$vol/$cau;
		$tiempo/=60;
		$tiempo=round($tiempo,2);
		echo "Tardara $tiempo horas";
	 ?>
</body>
</html>