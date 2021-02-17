<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 15</title>
</head>
<body>
	<?php 
		if(isset($_REQUEST['cadena'])){
			$cadena=$_REQUEST['cadena'];
			$espacios=0;
			$array;
			$posi=0;
			$palabras=0;
			$a=0;
			$e=0;
			$i=0;
			$o=0;
			$u=0;
			$aux=str_split(strtolower($cadena));
			for ($f=0; $f < strlen($cadena); $f++) { 
				if($cadena[$f]==" "){
					$espacios++;
					$array[]=substr($cadena,$posi,$f);
					$posi=$f;
				}
			}
			for ($f=0; $f < sizeof($array); $f++) { 
				if(strlen($array[$f])>=10){
					$palabras++;
				}
			}
			for ($f=0; $f < sizeof($aux); $f++) { 
				if($aux[$f]=='a'){
					$a++;
				}else if($aux[$f]=='e'){
					$e++;
				}else if($aux[$f]=='i'){
					$i++;
				}else if($aux[$f]=='o'){
					$o++;
				}else if($aux[$f]=='u'){
					$u++;
				}
			}
			$espacios=($espacios*100)/strlen($cadena);
			echo "La frase tiene $palabras palabras con mas de diez letras<br>La frase tiene $a a, $e e, $i i, $o o, $u u<br>La frase tiene $espacios espacios";
		}else{
			?>
			<form action="Ejercicio 12.php" method="post">
				<label>Introduce una frase: </label>
				<input type="text" name="cadena"><br>
				<input type="submit" value="Enviar">
			</form>
			<?php
		}
	 ?>
</body>
</html>