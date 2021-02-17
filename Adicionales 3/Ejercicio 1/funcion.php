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
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.html">';
	} ?>
	
</head>
<body>
	<?php $a=$_GET['a'] ?>
<table>
		<tr>
			<td><?php if($a==9){
						echo '<img src="imagenes/9.jpg">';
    				}else{
        				echo '<img src="imagenes/gris.jpg">';
    				}  
				?>
			</td>
			<td><?php if($a==8){
						echo '<img src="imagenes/8.jpg">' ;
    				}else{
        				echo '<img src="imagenes/gris.jpg">' ;
    				}  
				?></td>
			<td><?php if($a==7){
						echo '<img src="imagenes/7.jpg">' ;
    				}else{
        				echo '<img src="imagenes/gris.jpg">' ;
    				}  
				?></td>
		</tr>
		<tr>
			<td><?php if($a==6){
						echo '<img src="imagenes/6.jpg">';
    				}else{
        				echo '<img src="imagenes/gris.jpg">' ;
    				}  
				?></td>
			<td><?php if($a==5){
						echo '<img src="imagenes/5.jpg">' ;
    				}else{
        				echo '<img src="imagenes/gris.jpg">' ;
    				}  
				?></td>
			<td><?php if($a==4){
						echo '<img src="imagenes/4.jpg">';
    				}else{
        				echo '<img src="imagenes/gris.jpg">' ;
    				}  
				?></td>
		</tr>
		<tr>
			<td><?php if($a==3){
						echo '<img src="imagenes/3.jpg">' ;
    				}else{
        				echo '<img src="imagenes/gris.jpg">';
    				}  
				?></td>
			<td><?php if($a==2){
						echo '<img src="imagenes/2.jpg">';
    				}else{
        				echo '<img src="imagenes/gris.jpg">';
    				}  
				?></td>
			<td><?php if($a==1){
						echo '<img src="imagenes/1.jpg">';
    				}else{
        				echo '<img src="imagenes/gris.jpg">';
    				}  
				?></td>
		</tr>
	</table>
</body>
</html>