<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['unir'])){
			$ruta1=$_REQUEST['ruta1'];
			$ruta2=$_REQUEST['ruta2'];
			$file1=fopen($ruta1,'r');
			$file2=fopen($ruta2,'r');
			$estado1=0;
			$estado2=0;
			$ruta3=$_REQUEST['ruta3'];
			$file3=fopen($ruta3,'a');
			while ($estado1!=1 || $estado2!=1) {
				if($estado1==0){
					fwrite($file3,trim(fgets($file1)).PHP_EOL);
					if(feof($file1)){
						$estado1=1;
					}
				}
				if($estado2==0){
					fwrite($file3,trim(fgets($file2)).PHP_EOL);
					if(feof($file2)){
						$estado2=1;
					}
				}
			}
			echo "<h1>El fichero ya esta unido</h1>";
		}
	 ?>
	 <form action="index.php" method="post">
	 	Elige los fichero que se van a unir:<br>
	 	fichero 1:<input type="text" name="ruta1"><br>
	 	fichero 2:<input type="text" name="ruta2"><br>
	 	Donde se va a guardar el fichero:
	 	Destino:<input type="text" name="ruta3">
	 	<input type="submit" name="unir" value="Unir">
	 </form>
</body>
</html>