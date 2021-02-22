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
        <h1>Detalles Usuario</h1>
        <form action="../Controller/index.php" method="POST">
            <input type="submit" class="boton" value="Volver Listado Alumno">
        </form><br><br>
        <table>
            <tr>
                <th colspan="4">ALUMN@</th>
            </tr>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Curso</th>
            </tr>
            <?php
            foreach ($data['alumno'] as $alumno) {
                if ($alumno->getMatricula() == $aux->getMatricula()) {
            ?>
                    <tr>
                        <td><?= $alumno->getMatricula() ?></td>
                        <td><?= $alumno->getNombre() ?></td>
                        <td><?= $alumno->getApellido() ?></td>
                        <td><?= $alumno->getCurso() ?></td>
                    </tr>
            <?php
                    break;
                }
            }
            ?>
        </table>
        <table>
            <tr>
                <th colspan="3">Asignaturas</th>
            </tr>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Desmatricula</th>
            </tr>
            <?php
            foreach ($data['alumnoAsig'] as $asig) {
                $apo = new Asignatura($asig->getCodigo());
                foreach ($data['asignatura'] as $asignatura) {
                    if ($apo->getCodigo() == $asignatura->getCodigo()) {
            ?>
                        <tr>
                            <td><?= $asignatura->getCodigo() ?></td>
                            <td><?= $asignatura->getNombre() ?></td>
                            <td>
                                <form action="../Controller/desmatricular.php" method="post">
                                    <input type="hidden" name="matricula" value="<?=$aux->getMatricula()?>">
                                    <input type="hidden" name="codigo" value="<?=$asignatura->getCodigo()?>">
                                    <input type="submit" class="boton" value="Desmatricular">
                                </form>
                            </td>
                        </tr>
            <?php
                    }
                }
            }
            ?>
        </table>
        <form action="../Controller/matricularCurso.php" method="POST">
            <input type="hidden" name="matricula" value="<?=$aux->getMatricula()?>">
            <input type="submit" class="boton" value="Matricular a un Modulo">
        </form>
    </div>
</body>

</html>