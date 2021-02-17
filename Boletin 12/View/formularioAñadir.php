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
        <form action="../Controller/grabarBlog.php" method="post">
            Ingrese Un titulo: <input type="text" name="titulo" maxlength="30" required><br>
            Ingrese el texto maximo 300 caracteres:
            <br><textarea name="texto" maxlength="300" required></textarea>
            <input type="submit" name="enviar" value="Subir">
        </form>
    </div>

</body>

</html>