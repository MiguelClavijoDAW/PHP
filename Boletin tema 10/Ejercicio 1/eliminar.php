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
        if(isset($_REQUEST['eliminar'])){
            ?>
                <form action="eliminar.php" method="post">
                    Seguro que quieres eliminar al cliente:
                    <input type="hidden" value="<?=$_REQUEST['clave']?>" name="clave">
                    <input type="hidden" name="eliminar"><br>
                    <input type="submit" value="Si" name="si">
                </form>
                <form action="index.php" method="post">
                    <input type="submit" value="No">
                </form>
            <?php
            if(isset($_REQUEST['eliminar'])&&isset($_REQUEST['si'])){
                $conexion->query("DELETE FROM clientes WHERE dni='$_REQUEST[clave]'");
                header('Location: index.php');
            }
        }else{
            header('Location: index.php');
        }
    ?>

</body>
</html>