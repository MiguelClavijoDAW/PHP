<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	<table>
	<?php
		if(isset($_REQUEST['pos'])){
			$pos=$_REQUEST['pos'];
			if(isset($_REQUEST['vec'])){
				$vec=$_REQUEST['vec'];
				$ojos=explode(" ", $vec);
				$cont=0;
				for ($i=1; $i < 11; $i++) { 
					echo "<tr>";
					for ($i=1; $i < 11; $i++) { 
						if($cont==$pos){
							if($ojos[$cont]=='imagen/ojoCerrado.png'){
								$ojos[$cont]='imagen/ojoAbierto.png';
							}else{
								$ojos[$cont]='imagen/ojoCerrado.png';
							}
							$aux=implode(" ",$ojos);
							?>
							<td><a href="index.php?pos=<?=$cont?>&vec=<?=$aux?>"><img src="<?=$ojos[$cont]?>"></a></td>
							<?php
						}else{
							?>
							<td><a href="index.php?pos=<?=$cont?>&vec=<?=$aux?>"><img src="<?=$ojos[$cont]?>"></a></td>
							<?php
						}
						$cont++;
					}
					echo "</tr>";
				}
			}else{
				$ojos=new SplFixedArray(100);
				$cont=0;
				for ($i=1; $i < 11; $i++) { 
					for ($i=1; $i < 11; $i++) { 
						if($cont==$pos){
							$ojo[$cont]='imagen/ojoAbierto.png';
						}else{
							$ojo[$cont]='imagen/ojoCerrado.png';
						}
					}
				}
				$cont=0;
				$aux=implode(" ",$ojos);
				for ($i=1; $i < 11; $i++) { 
					echo "<tr>";
					for ($i=1; $i < 11; $i++) { 
						?>
							<td><a href="index.php?pos=<?=$cont?>&vec=<?=$aux?>"><img src="<?=$ojos[$cont]?>"></a></td>
						<?php
						$cont++;
					}
					echo "</tr>";
				}

			}
			
			

		} else{
			$ojos=new SplFixedArray(100);
			$cont=0;
			for ($i=1; $i < 11; $i++) { 
				echo "<tr>";
				for ($j=1; $j < 11; $j++) {
						$ojo[$cont]='imagen/ojoCerrado.png';
						?>
							<td><a href="index.php?pos=<?=$cont?>"><img src="<?=$ojos[$cont]?>"></a></td>
						<?php
						$cont++;
				}
				echo "</tr>";
			}
		}
	 ?>
	</table>
</body>
</html>