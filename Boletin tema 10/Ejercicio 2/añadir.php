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

        if(isset($_REQUEST['añadir'])){
            $codigo=$_REQUEST['codigo'];
            $descripcion=$_REQUEST['descripcion'];
            $precioc=$_REQUEST['precioc'];
            $preciov=$_REQUEST['preciov'];
            $margen=$_REQUEST['margen'];
            $stock=$_REQUEST['stock'];
            
            $consulta=$conexion->query("SELECT codigo FROM productos WHERE codigo=\"$codigo\"");
            if($consulta->rowCount()==0){
                $conexion->query("INSERT INTO productos value('$codigo', '$descripcion', '$precioc', '$preciov','$margen', '$stock')");
                header('Location: index.php');
            }else{
                header('Location: index.php');
            }
        }else{
            header('Location: index.php');
        }
    ?>
</body>
</html>