<!DOCTYPE html>
<html>
<head>
	<title>funcion EJ10</title>
</head>
<body>
	<?php 
		$dia=$_POST['dia'];
		$mes=$_POST['mes'];
		switch ($mes) {
			case 'enero':
				if($dia>=20){
					echo "Eres Capricornio";
				}else{
					echo "Eres Acuario";
				}
				break;
			case 'febrero':
				if($dia>19){
					echo "Eres Piscis";
				}else{
					echo "Eres Acuario";
				}
				break;
			case 'marzo':
				if($dia>20){
					echo "Eres Aries";
				}else{
					echo "Eres Piscis";
				}
				break;
			case 'abril':
				if($dia>20){
					echo "Eres Tauro";
				}else{
					echo "Eres Aries";
				}
				break;
			case 'mayo':
				if($dia>=22){
					echo "Eres Geminis";
				}else{
					echo "Eres Tauro";
				}
				break;
			case 'junio':
				if($dia>=22){
					echo "Eres Cancer";
				}else{
					echo "Eres Geminis";
				}
				break;
			case 'julio':
				if($dia>=24){
					echo "Eres Leo";
				}else{
					echo "Eres Cancer";
				}
				break;
			case 'agosto':
				if($dia>=24){
					echo "Eres Virgo";
				}else{
					echo "Eres Leo";
				}
				break;
			case 'septiembre':
				if($dia>=24){
					echo "Eres Libra";
				}else{
					echo "Eres Virgo";
				}
				break;
			case 'octubre':
				if($dia>=24){
					echo "Eres Escorpio";
				}else{
					echo "Eres Libra";
				}
				break;
			case 'noviembre':
				if($dia>=23){
					echo "Eres Sagitario";
				}else{
					echo "Eres Escorpio";
				}
				break;
			case 'diciembre':
				if($dia>=22){
					echo "Eres Capricornio";
				}else{
					echo "Eres Sagitario";
				}
				break;
			default:
				echo "Mes no encontrado";
		}
	 ?>
</body>
</html>