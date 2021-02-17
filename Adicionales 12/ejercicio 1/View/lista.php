<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td,tr{
            border:1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="7">TIENDA ONLINE</th>
        </tr>
        <tr>
            <td colspan="5">
                <form action="../Controller/nuevoProducto.php" method="post">
                    <input type="submit" value="Nuevo Producto">
                </form>
            </td>
            <td colspan="2">CESTA</td>
        </tr>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Modificar</th>
            <th>Borrar</th>
            <th>Comprar</th>
        </tr>
        <?php 
            foreach ($data['productos'] as $productos) {
                ?>
                <tr>
                    <td><?=$productos->getCodigo()?></td>
                    <td><?=$productos->getNombre()?></td>
                    <td><?=$productos->getPrecio()?></td>
                    <td><?=$productos->getStock()?></td>
                    <td>
                        <form action="../Controller/modificarProducto.php" method="post">
                            <input type="hidden" name="codigo" value="<?=$productos->getCodigo()?>">
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                        <form action="../Controller/eliminarProducto.php" method="post">
                            <input type="hidden" name="codigo" value="<?=$productos->getCodigo()?>">
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="codigo" value="<?=$productos->getCodigo()?>">
                            <input type="submit" value="Comprar">
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>