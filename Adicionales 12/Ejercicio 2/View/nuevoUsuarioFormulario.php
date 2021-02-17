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
        <h1>Nuevo Usuario</h1>
        <form action="../Controller/cargarUsuario.php" method="POST">
            Matricula:
            <input type="number" name="matricula">
            <br>
            Nombre:
            <input type="text" name="nombre">
            <br>
            Apellidos:
            <input type="text" name="apellido">
            Curso:
            <input type="text" name="curso"><br><br>
            <input type="submit" class="boton" value="Añadir">
        </form>
        <br><br>
        <form action="../Controller/index.php" method="POST">
            <input type="submit" class="boton"  value="Volver Listado Alumno">
        </form>
    </div>

</body>

</html>