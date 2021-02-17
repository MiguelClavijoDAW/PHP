<!DOCTYPE html>
<html>
<head>
	<title>Generar Loteria</title>
	<style type="text/css">
		table, td{
			border:1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<?php 
		function combinacion($array){
			for ($i=0; $i < sizeof($array); $i++) { 
				if($array[$i]==0){
					$array[$i]=rand(1,49);
				}
			}
			return $array;
		}
		$array=new SplFixedArray(6);
		for ($i=1; $i < 7; $i++) { 
			if(isset($_POST['n'.$i])){
				$array[$i-1]=$_POST['n'.$i];
			}else{
				$array[$i-1]=0;
			}
		}
		$array=combinacion($array);
		$titulo=$_POST['titulo'];
		if($titulo==""){
			$titulo="La combinacion generada";
		}
		$serie=$_POST['serie'];
		if($serie==""){
			$serie=rand(1,999);
		}
	 ?>
	 <table>
	 	<tr>
	 		<th colspan="6"><?=$titulo?></th>
	 	</tr>
	 	<tr>
	 		<td><?=$array[0]?></td>
	 		<td><?=$array[1]?></td>
	 		<td><?=$array[2]?></td>
	 		<td><?=$array[3]?></td>
	 		<td><?=$array[4]?></td>
	 		<td><?=$array[5]?></td>
	 	</tr>
	 	<tr>
	 		<td colspan="6">Nº de Serie: <?=$serie?></td>
	 	</tr>
	 </table>
</body>
</html>