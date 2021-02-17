<!DOCTYPE html>
<html>
<head>
	<title>Ejercico 1-6</title>
</head>
<body>
<h2>Multiplos de 5 bucle for</h2>
<?php 
	for ($i=5; $i <= 100; $i+=5) { 
		echo "Multiplos de 5: $i<br>";
	}
 ?>
 <hr>
<h2>Multiplos de 5 bucle while</h2>
<?php 
	$i=5;
	while ($i<= 100) {
		echo "Multiplos de 5: $i<br>";
		$i+=5;
	}
 ?>
 <hr>
 <h2>Multiplos de 5 bucle do-while</h2>
 <?php 
 	$i=5;
 	do{
 		echo "Multiplos de 5: $i<br>";
		$i+=5;
 	}while($i<=100)
  ?>
  <hr>
  <h2>Numeros del 320 al 160 bucle for</h2>
  <?php 
  	for ($i=320; $i >=160 ; $i-=20) { 
  		echo "$i<br>";
  	}
   ?>
   <hr>
   <h2>Numeros del 320 al 160 bucle while</h2>
   <?php 
   		$i=320;
   		while ($i>= 160) {
   			echo "$i<br>";
   			$i-=20;
   		}
    ?>
    <hr>
    <h2>Numeros del 320 al 160 bucle do-while</h2>
    <?php 
    	$i=320;
    	do{
    		echo "$i<br>";
   			$i-=20;
    	}while($i>=160)
     ?>
</body>
</html>