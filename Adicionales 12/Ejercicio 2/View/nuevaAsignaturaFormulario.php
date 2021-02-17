<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <div class="container">
        <h1>Nueva Asignatura</h1>
        <form action="../Controller/cargarAsignatura.php" method="post">
            Nombre asignatura:
            <input type="text" name="nombre"><br><br>
            <input type="submit" class="boton" value="Añadir">
        </form><br><br>
        <form action="../Controller/index.php" method="POST">
            <input type="submit" class="boton"  value="Volver Listado Alumno">
        </form>
    </div>

</body>

</html>