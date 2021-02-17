<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ3</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$color=$_POST['color'];
		$letra=$_POST['letra'];
		$text=$_POST['text'];
		echo "<div style=\"background: $color; color: $letra;\"><p>$text</p></div>";
	 ?>
</body>
</html>