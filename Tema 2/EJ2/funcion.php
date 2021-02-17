<!DOCTYPE html>
<html>
<head>
	<title>Funcion EJ2</title>
</head>
<body>
	<?php 
		$euros=$_POST['euros'];
		$pesetas=$euros*166.386;
		echo "$euros € son $pesetas pesetas";
	 ?>
</body>
</html>