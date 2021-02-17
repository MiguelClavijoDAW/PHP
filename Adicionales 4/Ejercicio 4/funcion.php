<!DOCTYPE html>
<html>
<head>
	<title>Ejercicoi 4</title>
</head>
<body>
	<?php 
		$g1=rand(1,49);
		$g2=rand(1,49);
		$g3=rand(1,49);
		$g4=rand(1,49);
		$g5=rand(1,49);
		$g6=rand(1,49);
		?>
		<table border="1px">
		<?php
		$selec=0;
		$cont=0;
		$num=1;
		for ($i=1; $i < 8; $i++) { 
			echo "<tr>";
			for ($f=1; $f < 8; $f++) { 
				if(isset($_REQUEST[$num])){
					$selec++;
					if($num==$g1 ||$num==$g2||$num==$g3||$num==$g4||$num==$g5||$num==$g6){
						$cont++;
						?>
						<td style="color: #3FFF00;"><?=$num?></td>
						<?php
					}else{
					?>
					<td style="color: #000000;"><?=$num?></td>
					<?php
				}
				}else if($num==$g1 ||$num==$g2||$num==$g3||$num==$g4||$num==$g5||$num==$g6){
						?>
							<td style="color: #FF0000;"><?=$num?></td>
						<?php
				}else{
					?>
					<td style="color: #000000;"><?=$num?></td>
					<?php
				}
				$num++;
			}
			echo "</tr>";
		}
		?>
	</table>
	<?php
		if($selec>6){
			echo "Has seleccionado mas de 6 numeros asi que no has ganado nada";
		}else{
			switch ($cont) {
				case 4:
					echo "Has acertado 4 has ganado el dinero vuelto";
					break;
				case 5:
					echo "Has acertado 5 has ganado 100€";
					break;
				case 6:
					echo "Has acertado las 6 has ganado 500€";
					break;
				default:
					echo "No has ganado nada lo siento";
					break;
			}
		}
	?>
</body>
</html>