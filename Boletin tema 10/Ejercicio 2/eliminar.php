<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=gestimal;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }

        if(isset($_REQUEST['eliminar'])){
            $codigo=$_REQUEST['codigo'];
            $conexion->query("DELETE FROM productos WHERE codigo= '$codigo'");
            header('Location: index.php');
        }else{
            header('Location: index.php');
        }
    ?>
</body>
</html>