<!DOCTYPE html>
<html>
<head>
	<title>Funcion ejercicio 2</title>
</head>
<body>
	<?php 
		$g1=rand(1,49);
		$g2=rand(1,49);
		$g3=rand(1,49);
		$g4=rand(1,49);
		$g5=rand(1,49);
		$g6=rand(1,49);
		if(isset($_POST["n$g1"])){
			if(isset($_POST["n$g2"])){
				if(isset($_POST["n$g3"])){
					if(isset($_POST["n$g4"])){
						if(isset($_POST["n$g5"])){
							if(isset($_POST["n$g6"])){
								echo "Tu numero es el acertado es el $g1 $g2 $g3 $g4 $g5 $g6 <br>"
								echo "Has ganado 500€";
							}else{
								echo "Tu numero no es el acertado es el $g1 $g2 $g3 $g4 $g5 $g6<br> Tienes 30€ de premio";
							}
						}else{
							echo "Tu numero no es el acertado es el $g1 $g2 $g3 $g4 $g5 $g6<br> Has acertado solo 4 <br> Tienes 10€ de premio";
						}
					}else{
						echo "Tu numero no es el acertado es el $g1 $g2 $g3 $g4 $g5 $g6<br> Has acertado solo 3";
					}
				}else{
					echo "Tu numero no es el acertado es el $g1 $g2 $g3 $g4 $g5 $g6<br> Has acertado solo 2";
				}
			}else{
				echo "Tu numero no es el acertado es el $g1 $g2 $g3 $g4 $g5 $g6<br> Has acertado solo 1";
			}
		}else{
			echo "Tu numero no es el acertado es el $g1 $g2 $g3 $g4 $g5 $g6";
		}
	 ?>
</body>
</html>