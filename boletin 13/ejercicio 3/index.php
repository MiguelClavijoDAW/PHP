<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if(isset($_REQUEST['peseta'])){
        $peseta=$_REQUEST['peseta'];
        $datos=file_get_contents("http://localhost/Ejercicio%20PHP/boletin%2013/ejercicio%203/pesetas.php?p=$peseta");
        $valor=json_decode($datos);
        echo "$peseta pesetas son $valor Euros";
    }else if(isset($_REQUEST['euro'])){
        $euro=$_REQUEST['euro'];
        $datos=file_get_contents("http://localhost/Ejercicio%20PHP/boletin%2013/ejercicio%203/pesetas.php?e=$euro");
        $valor=json_decode($datos);
        echo "$euro Euros son $valor pesetas";
    }
?>
    <form action="index.php" method="post">
        Introduce Los Euros:
        <input type="text" name="euro">
        <input type="submit" value="A Pesetas">
    </form><br>
    <form action="index.php" method="post">
        Introduce Las Pesetas:
        <input type="text" name="peseta">
        <input type="submit" value="A Euros">
    </form>
</body>
</html>