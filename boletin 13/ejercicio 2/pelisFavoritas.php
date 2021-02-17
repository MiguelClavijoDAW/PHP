<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "Pelicula.php";
        $peliculas=Pelicula::getPeliculas();
        foreach ($peliculas as $peli) {
            ?><div>
                <p>Titulo: <?=$peli->getTitulo()?></p>
                <p>Año: <?=$peli->getAño()?></p>
                <p>Direcctor <?=$peli->getDirector()?></p>
                <p>Duracion <?=$peli->getDuracion()?></p>
                <p>Duracion <?=$peli->getGenero()?></p>
                <p>Poster: </p><img src="<?=$peli->getPoster()?>">
            </div><hr><?php
        }
    ?>
    <form action="index.php" method="post">
        <input type="submit" value="Volver a inicio">
    </form>
</body>
</html>