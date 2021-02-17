<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        foreach ($data['productos'] as $productos) {
            if($productos->getCodigo()==$cod){
                ?>
                <form action="../Controller/guardarProducto.php" method="post">
                    Nombre: <input type="text" name="nombre" value="<?=$productos->getNombre()?>"><br>
                    Precio: <input type="number" step="any" name="precio" value="<?=$productos->getPrecio()?>"><br>
                    Stock: <input type="number" name="stock" value="<?=$productos->getStock()?>"><br>
                    <input type="hidden" name="codigo" value="<?=$productos->getCodigo()?>">
                    <input type="submit" value="Modificar">
                </form>
                <?php
            }
        }
    ?>
</body>
</html>