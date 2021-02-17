<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pelicula</h1>
    <?php 
        if(isset($_REQUEST['titulo'])){
            $titulo=$_REQUEST['titulo'];
            $aux=trim($titulo);
            $aux=str_replace(" ","+",$aux);
            $clave="ffc04476";
            $datos=file_get_contents("http://www.omdbapi.com/?apikey=$clave&t=$aux");
            $peli=json_decode($datos);
            // print_r($peli);
            ?>
            <div>
                <p>Titulo: <?=$peli->Title?></p>
                <p>Año: <?=$peli->Year?></p>
                <p>Direcctor <?=$peli->Director?></p>
                <p>Duracion <?=$peli->Runtime?></p>
                <p>Genero <?=$peli->Genre?></p>
                <p>Poster: </p><img src="<?=$peli->Poster?>">
            </div>
            <form action="guardar.php" method="post">
                <input type="hidden" name="titulo" value="<?=$peli->Title?>">
                <input type="hidden" name="año" value="<?=$peli->Year?>">
                <input type="hidden" name="director" value="<?=$peli->Director?>">
                <input type="hidden" name="duracion" value="<?=$peli->Runtime?>">
                <input type="hidden" name="genero" value="<?=$peli->Genre?>">
                <input type="hidden" name="poster" value="<?=$peli->Poster?>">
                <input type="submit" value="Guardar en Favoritos">
            </form>
            <?php
        }else{
            header("location: index.php");
        }
    ?>
    <a href="index.php">Volver a Inicio</a>
</body>
</html>