<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (isset($_REQUEST['borrar'])) {
			$ruta=$_REQUEST['ruta'];
			$file=fopen($ruta.'.html','r');
			$cadena="";
			while (!feof($file)) {
				$cadena.=fgets($file);
			}
			fclose($file);
			for ($i=0; $i < strlen($cadena); $i++) { 
				if($cadena[$i]=="<"){
					$aux1=$i;
				}
				if($cadena[$i]==">"){
					$aux2=$i;
					$aux3=substr($cadena, $aux1,$aux2);
					preg_replace($aux3,"",$cadena);
				}
			}
			$file2=fopen($ruta.'_Sin.html','w');
			fwrite($file2,$cadena);
			fclose($file2);
			echo "<h1>Archivo procesado</h1>";
		}
	 ?>
	 <form action="index.php" method="post">
	 	Introduce el archivo:
	 	<input type="text" name="ruta"><br>
	 	<input type="submit" name="borrar" value="Procesar">
	 </form>
</body>
</html>