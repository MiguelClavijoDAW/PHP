<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<table border="1">
		<?php
			if(isset($_GET['col'])){
				$col=$_GET['col'];
				$fil=$_GET['fil'];
			}else{
				$col=-1;
				$fil=-1;
			}
			for ($i=0; $i < 10; $i++) { 
				?>
				<tr>
				<?php
				for ($f=0; $f < 10; $f++) { 
					if($col==$i){
						if($fil==$f){
						?>
							<td><a href="Ejercicio 2.php?col=<?=$i?>&fil=<?=$f?>"><img src="ojoAbierto.png"></a></td>
						<?php
						}else{
							?>
							<td><a href="Ejercicio 2.php?col=<?=$i?>&fil=<?=$f?>"><img src="ojoCerrado.png"></a></td>
							<?php
						}
					}else{
						?>
						<td><a href="Ejercicio 2.php?col=<?=$i?>&fil=<?=$f?>"><img src="ojoCerrado.png"></a></td>
						<?php
					}
				}?>
				</tr>
				<?php
			}
		 ?>
	</table>
</body>
</html>