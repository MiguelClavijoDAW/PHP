<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['fin'])){
			$file=fopen('texto.txt','r');
			while (!feof($file)) {
				echo fgets($file)."<br>";
			}
			fclose($file);
			unlink('texto.txt');
		}else{
			if(isset($_REQUEST['añadir'])){
				$file=fopen("texto.txt", "a");
				$texto=$_REQUEST['texto'];
				fwrite($file, $texto.PHP_EOL);
				fclose($file);
			}
			?>
			<form action="index.php" method="post">
				Añadir texto:<br>
				<textarea name="texto" cols="20" rows="10"></textarea>
				<br>
				<input type="submit" name="añadir" value="Añadir">
			</form>
			<form action="index.php" method="post">
				<input type="submit" name="fin" value="Terminar">
			</form>
			<?php
		}
	 ?>
</body>
</html>