<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }
    ?>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Dirreccion</th>
            <th>Telefono</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>
        <?php 
            $consulta=$conexion->query("SELECT * FROM clientes");
            while($cliente=$consulta->fetchObject()){
                ?>
                    <tr>
                        <td><?=$cliente->DNI?></td>
                        <td><?=$cliente->nombre?></td>
                        <td><?=$cliente->direccion?></td>
                        <td><?=$cliente->telefono?></td>
                        <td><form action="modificacion.php" method="post">
                            <input type="hidden" value="<?=$cliente->DNI?>" name="clave">
                            <input type="hidden" value="<?=$cliente->nombre?>" name="nombre">
                            <input type="hidden" value="<?=$cliente->direccion?>" name="direccion">
                            <input type="hidden" value="<?=$cliente->telefono?>" name="telefono">
                            <input type="submit" name="editar" value="Modificar">
                        </form></td>
                        <form action="eliminar.php" method="post">
                            <td><input type="hidden" value="<?=$cliente->DNI?>" name="clave">
                            <input type="submit" name="eliminar" value="Eliminar"></td>
                        </form>
                    </tr>
                <?php
            }
        ?>
        <form action="añadir.php" method="post">
            <tr>
                <td><input type="text" name="dni"></td>
                <td><input type="text" name="nombre"></td>
                <td><input type="text" name="direccion"></td>
                <td><input type="text" name="telefono"></td>
                <td colspan="2"><input type="submit" name="añadir" value="Añadir"></td>
            </tr>
        </form>
    </table>
</body>
</html>