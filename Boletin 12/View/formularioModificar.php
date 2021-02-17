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
        <form action="../Controller/guardarBlog.php" method="post">
            <?php
            foreach ($data['articulo'] as $articulo) {
                if ($articulo->getCodigo() == $codigo) {
            ?>
                    Titulo: <input type="text" name="titulo" value="<?= $articulo->getTitulo() ?>" maxlength="30"><br>
                    Texto:<br>
                    <textarea name="texto" maxlength="300"><?= $articulo->getTexto() ?></textarea>
                    <br>
                    <input type="hidden" name="codigo" value="<?= $codigo ?>">
                    <input type="submit" name="actualizar" value="Actualizar">
            <?php
                } else {
                    header('location: ../index.php');
                }
            }

            ?>
        </form>
    </div>

</body>

</html>