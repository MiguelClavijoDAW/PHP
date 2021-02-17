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
        <h1>Asignaturas</h1>
        <hr>
        <form action="../Controller/añadirAsignaruta.php" method="POST">
            <input type="submit" class="boton"  value="Nueva Asignatura">
        </form>
        <br>
        <form action="../Controller/index.php" method="POST">
            <input type="submit" class="boton"  value="Volver Listado Alumno">
        </form>
        <hr>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Eliminar</th>
            </tr>
            <?php
            foreach ($data['asignatura'] as $asig) {
            ?>
                <tr>
                    <td><?= $asig->getCodigo() ?></td>
                    <td><?= $asig->getNombre() ?></td>
                    <td>
                        <form action="../Controller/eliminarAsignatura.php" method="post">
                            <input type="hidden" name="codigo" value="<?= $asig->getCodigo() ?>">
                            <input type="submit" class="boton"  value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

    </div>

</body>

</html>