<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
	<?php if(isset($_POST['palabra'])){
		if($_POST['palabra']=='lobo'){
			echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=solucion.php">';
		}else{
			echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=error.php">';
		}
		
	}else{
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php">';
	} ?>
	
</head>
<body>
	<?php $a=$_GET['a'] ?>
<table>
		<?php 
			$cont=1;
			for ($i=0; $i < 3; $i++) { 
				?>
				<tr>
				<?php
				for ($f=0; $f < 3; $f++) {
					if($a==$cont){
						?>
						<td><img src="imagenes/<?=$cont?>.jpg"></td>
						<?php
					}else{
						?>
						<td><img src="imagenes/gris.jpg"></td>
						<?php
					}
					$cont++;
				}
			}
		 ?>
	</table>
</body>
</html>