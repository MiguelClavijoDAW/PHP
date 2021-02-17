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
            $conexion = new PDO("mysql:host=localhost;dbname=gestimal;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }
    ?>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio de compra</th>
            <th>Precio de venta</th>
            <th>Margen</th>
            <th>Stock</th>
            <th colspan="4">Acciones</th>
        </tr>
        <?php 
            $consulta=$conexion->query("SELECT * FROM productos");
            while($prod=$consulta->fetchObject()){
                ?>
                <tr>
                    <td><?=$prod->codigo?></td>
                    <td><?=$prod->descripcion?></td>
                    <td><?=$prod->precioc?></td>
                    <td><?=$prod->preciov?></td>
                    <td><?=$prod->margen?></td>
                    <td><?=$prod->stock?></td>
                    <td><form action="eliminar.php" method="post">
                        <input type="hidden" name="codigo" value="<?=$prod->codigo?>">
                        <input type="submit" name="eliminar" value="Eliminar">
                    </form></td>
                    <td><form action="modificar.php" method="post">
                        <input type="hidden" name="codigo" value="<?=$prod->codigo?>">
                        <input type="submit" name="modificar" value="Modificar">
                    </form></td>
                    <td><form action="stock.php" method="post">
                        <input type="hidden" name="codigo" value="<?=$prod->codigo?>">
                        <input type="submit" name="entrada" value="Entrada">
                    </form></td>
                    <td><form action="stock.php" method="post">
                        <input type="hidden" name="codigo" value="<?=$prod->codigo?>">
                        <input type="submit" name="venta" value="Venta">
                    </form></td>
                </tr>
                <?php
            }
        ?>
        <form action="añadir.php" method="post">
            <tr>
                <td><input type="text" name="codigo"></td>
                <td><input type="text" name="descripcion"></td>
                <td><input type="number" step="any" name="precioc"></td>
                <td><input type="number" step="any" name="preciov"></td>
                <td><input type="number" step="any" name="margen"></td>
                <td><input type="number" name="stock"></td>
                <td colspan="4"><input style="display: block; width: 100%;" type="submit" name="añadir" value="Añadir"></td>
            </tr>
        </form>
    </table>
</body>
</html>