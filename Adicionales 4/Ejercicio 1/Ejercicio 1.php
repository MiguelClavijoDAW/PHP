<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	<table border=1;>
		<tr><td>Bloque</td><td>Piso</td><td>Llamar</td></tr>
		<?php
			$contb=1;
			$contp=1;
			for ($i=1; $i < 71 ; $i++) {
				if($contp<=7){
					if($contb<=10){
						?>
						<tr>
						<td><?=$contb?></td>
						<td><?=$contp?></td>
						<td><a href="LLamar.php?bloque=<?=$contb?>&piso=<?=$contp?>"><input type="button" value="LLamar"></a></td>
						</tr>
						<?php
						
						$contp++;
					}
				}else{
					$contp=1;
					$contb++;
					$i--;
				}
			}
		 ?>
	</table>
</body>
</html>