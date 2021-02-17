<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/estilo.css">
</head>

<body>
    <div class="container">
        <h1>Articulos de Blog</h1>
        <hr>
        <form action="../Controller/insertarBlog.php" method="post">
            <input type="submit" class="boton" value="Nuevo Articulo">
        </form>
        <hr>
        <div class="articulo">
            <?php
            foreach ($data['articulo'] as $articulo) {
            ?>
                <div class="articulo">
                    <h3><?= $articulo->getTitulo(); ?></h3>
                    <p><?= $articulo->getTexto(); ?></p>
                    <p>Fecha de publicacion: <?= $articulo->getFecha(); ?></p>
                    <form action="../Controller/modificarBlog.php" method="post">
                        <input type="hidden" name="codigo" value="<?= $articulo->getCodigo(); ?>">
                        <input type="submit" class="boton" value="Modificar" ;>
                    </form>
                    <form action="../Controller/borrarBlog.php" method="post">
                        <input type="hidden" value="<?= $articulo->getCodigo(); ?>" name="codigo">
                        <input type="submit" class="boton" value="Borrar">
                    </form>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</body>

</html>