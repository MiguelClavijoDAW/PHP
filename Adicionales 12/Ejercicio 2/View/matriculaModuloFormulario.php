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
        <table>
            <tr>
                <th colspan="3">Matricular</th>
            </tr>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Matricular</th>
            </tr>
            <?php 
                foreach ($noMatricula as $modulo) {
                    ?>
                    <tr>
                        <td><?=$modulo->getCodigo()?></td>
                        <td><?=$modulo->getNombre()?></td>
                        <td>
                            <form action="../Controller/cargarAlumnoAsignatura.php" method="post">
                                <input type="hidden" name="matricula" value="<?=$_REQUEST['matricula']?>">
                                <input type="hidden" name="codigo" value="<?=$modulo->getCodigo()?>">
                                <input type="submit" class="boton" value="Matricular">
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