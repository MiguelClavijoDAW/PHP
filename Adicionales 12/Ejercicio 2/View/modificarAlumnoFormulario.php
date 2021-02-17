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
        <h1>Modificar Alumno</h1>
        <?php 
            foreach ($data['alumno'] as $alumno) {
                if($alumno->getMatricula()==$aux->getMatricula()){
                    ?>
                     <form action="../Controller/cargarModificacion.php" method="post">
                     <input type="hidden" name="matricula" value="<?=$alumno->getMatricula()?>">
                        Nombre: <input type="text" name="nombre" value="<?=$alumno->getNombre()?>">
                        <br>
                        Apellidos: <input type="text" name="apellido" value="<?=$alumno->getApellido()?>">
                        <br>
                        Curso: <input type="text" name="curso" value="<?=$alumno->getCurso()?>">
                        <br><br>
                        <input type="submit" value="Modificar" class="boton">
                    </form>   
                    <?php
                }
            }
        ?>
    </div>
</body>
</html>