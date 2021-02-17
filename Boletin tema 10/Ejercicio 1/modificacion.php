<?php session_start();?>
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
        if(isset($_REQUEST['modificar'])){
            $conexion->query("UPDATE clientes SET dni='$_REQUEST[dni]', nombre='$_REQUEST[nombre]', direccion='$_REQUEST[direccion]',telefono='$_REQUEST[telefono]' WHERE dni='$_REQUEST[clave]'");
            header('Location: index.php');
        }
        if(isset($_REQUEST['editar'])){
            $dni=$_REQUEST['clave'];
            ?>
                <form action="modificacion.php" method="post">
                    DNI:
                    <input type="text" value="<?=$dni?>" name="dni"><br>
                    Nombre:
                    <input type="text" value="<?=$_REQUEST['nombre']?>" name="nombre"><br>
                    Direccion:
                    <input type="text" value="<?=$_REQUEST['direccion']?>" name="direccion"><br>
                    Telefono:
                    <input type="text" value="<?=$_REQUEST['telefono']?>" name="telefono"><br>
                    <input type="hidden" value="<?=$dni?>" name="clave">
                    <input type="submit" value="Modificar" name="modificar">
                </form>
            <?php
        }else{
            header('Location: index.php');
        }
    ?>
</body>
</html>