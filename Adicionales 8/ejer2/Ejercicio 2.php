<?php 
	session_start();
	if(!isset($_SESSION['Vsi'])){
		if(isset($_COOKIE['votoSi'])){
		$_SESSION['Vsi']=$_COOKIE['votoSi'];
		$_SESSION['Vno']=$_COOKIE['votoNo'];
		}else{
		$_SESSION['Vsi']=0;
		$_SESSION['Vno']=0;
		setcookie('votoSi',$_SESSION['Vsi'],time()+7776000);
		setcookie('votoNo',$_SESSION['Vno'],time()+7776000);
		}
	}
	if(isset($_REQUEST['si'])){
		$_SESSION['Vsi']++;
		setcookie('votoSi',$_SESSION['Vsi'],time()+7776000);
	}
	if(isset($_REQUEST['no'])){
		$_SESSION['Vno']++;
		setcookie('votoNo',$_SESSION['Vno'],time()+7776000);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	 <h2>¿Navidades con toque de queda?</h2>
	 <a>SI:</a>
	 <?php
	 	for ($i=0; $i < $_SESSION['Vsi']; $i++) { 
	 	 	?>
	 	 	<img src="si.png" width="30px" height="30px">
	 	 	<?php
	 	 } 
	  ?>
	  <br>
	  <a>NO:</a>
	  <?php
	 	for ($i=0; $i < $_SESSION['Vno']; $i++) { 
	 	 	?>
	 	 	<img src="roja.png" width="30px" height="30px">
	 	 	<?php
	 	 } 
	  ?>
	  <hr>
	  <form action="Ejercicio 2.php" method="post">
	  	<input type="hidden" name="si">
	  	<input type="submit" value="SI">
	  </form>
	  <form action="Ejercicio 2.php" method="post">
	  	<input type="hidden" name="no">
	  	<input type="submit" value="NO">
	  </form>
</body>
</html>