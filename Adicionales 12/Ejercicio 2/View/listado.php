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
    <h1>LISTA DE ALUMNOS</h1>
    <hr>
    <form action="../Controller/nuevoUsuario.php" method="post">
        <input type="submit" class="boton" value="Nuevo Usuario">
    </form><br>
    <form action="../Controller/VerAsignatura.php" method="POST">
        <input type="submit" class="boton"  value="Asignaturas">
    </form><br>
    <form action="../Controller/imprimirAlumno.php" method="post">
        <input type="submit" value="Impimir Listas Alumno" class="boton">
    </form>
    <hr>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Curso</th>
            <th>Detalles</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>
        <?php 
            foreach ($data['alumnos'] as $alumno) {
                ?>
                <tr>
                    <td><?=$alumno->getMatricula()?></td>
                    <td><?=$alumno->getNombre()?></td>
                    <td><?=$alumno->getApellido()?></td>
                    <td><?=$alumno->getCurso()?></td>
                    <td>
                        <form action="../Controller/detalles.php" method="post">
                        <input type="hidden" value="<?=$alumno->getMatricula()?>" name="matricula">
                            <input type="submit"  class="boton" value="Detalles">
                        </form>
                    </td>
                    <td>
                        <form action="../Controller/eliminarAlumno.php" method="POST">
                            <input type="hidden" name="matricula" value="<?=$alumno->getMatricula()?>">
                            <input type="submit" class="boton" value="Eliminar">
                        </form>
                    </td>
                    <td>
                        <form action="../Controller/modificarAlumno.php" method="post">
                            <input type="hidden" name="matricula" value="<?=$alumno->getMatricula()?>">
                            <input type="submit" class="boton" value="Modificar">
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