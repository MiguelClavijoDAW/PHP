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
            $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }
        if(isset($_REQUEST['dni'])&&isset($_REQUEST['nombre'])&&isset($_REQUEST['direccion'])&&isset($_REQUEST['telefono'])){

            $consulta=$conexion->query("Select * FROM clientes WHERE dni='$_REQUEST[dni]'");
            if($consulta->rowCount()==0){
                $conexion->query("Insert into clientes value('".$_REQUEST['dni']."','".$_REQUEST['nombre']."','".$_REQUEST['direccion']."','".$_REQUEST['telefono']."')");
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