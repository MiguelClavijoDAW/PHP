<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['ordenar'])){
			$ruta=$_REQUEST['ruta'].'.txt';
			$file=fopen($ruta,'r');
			$file2=fopen($_REQUEST['ruta'].'_sort.txt','a');
			$aux=[];
			while (!feof($file)) {
				$aux[]=trim(fgets($file));
			}
			sort($aux);
			for ($i=0; $i < count($aux); $i++) { 
				fwrite($file2, $aux[$i].PHP_EOL);
			}
			fclose($file);
			fclose($file2);
			echo "<h1>Fichero creado y ordenado</h1>";
		}
	 ?>
	 <form action="index.php" method="post">
	 	Ruta del fichero para ordenar (No poner la extencion .txt):
	 	<input type="text" name="ruta"><br>
	 	<input type="submit" name="ordenar" value="Ordenar">
	 </form>
</body>
</html>