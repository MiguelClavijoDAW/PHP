<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (isset($_REQUEST['buscar'])) {
			$ruta=$_REQUEST['ruta'];
			$palabra=$_REQUEST['palabra'];
			$cont=0;
			$file=fopen($ruta,'r');
			$cadena="";
			while (!feof($file)) {
				$cadena.=trim(fgets($file));
			}
			$cadena=preg_replace("/[\r\n|\n|\r]+/", " ", $cadena);
			$cadena=strtolower($cadena);
			$palabra=strtolower($palabra);
			$aux=explode(" ", $cadena);
			for ($i=0; $i < count($aux); $i++) { 
				if($aux[$i]==$palabra){
					$cont++;
				}
			}
			fclose($file);
			echo "<h1>Se ha encontrado $cont veces la palabra $palabra</h1>";
		}
	 ?>
	 <form action="index.php" method="post">
	 	Introdue el fichero:
	 	<input type="text" name="ruta"><br>
	 	Introdue la palabra:
	 	<input type="text" name="palabra"><br>
	 	<input type="submit" name="buscar" value="Buescar">
	 </form>
</body>
</html>