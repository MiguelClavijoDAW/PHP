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
    if(isset($_REQUEST['num'])){
        $num=$_REQUEST['num'];
        $datos=file_get_contents("http://localhost/Ejercicio%20PHP/boletin%2013/ejercicio%204/baraja.php?num=$num");
        $valor=json_decode($datos);
        echo "<h1>Baraja de Cartas</h1>";
        foreach ($valor as $carta) {
            echo "<p>$carta</p>";
        }
    }
?>
<hr>
    <form action="index.php" method="post">
        Introduce un numero entre 1 y 40:
        <input type="number" max="40" min="1" required name="num">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>