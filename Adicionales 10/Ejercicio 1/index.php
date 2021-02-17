<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=horariophp;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }  
    ?>
    <table>
        <tr>
            <th>Horas</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <?php 
        $cont=1;
            $consulta=$conexion->query("SELECT * FROM horario");
            while($clase=$consulta->fetchObject()){
                ?>
                    <tr>
                        <td><?=$clase->hora?></td>
                        <td><form action="modificar.php" method="POST">
                            <input type="hidden" name="dia" value="lunes">
                            <input type="hidden" name="hora" value="<?=$cont?>">
                            <input type="submit" name="asig" value="<?=$clase->lunes?>">
                            </form></td>
                        <td><form action="modificar.php" method="POST">
                            <input type="hidden" name="dia" value="martes">
                            <input type="hidden" name="hora" value="<?=$cont?>">
                            <input type="submit" name="asig" value="<?=$clase->martes?>">
                            </form></td>
                        <td><form action="modificar.php" method="POST">
                            <input type="hidden" name="dia" value="miercoles">
                            <input type="hidden" name="hora" value="<?=$cont?>">
                            <input type="submit" name="asig" value="<?=$clase->miercoles?>">
                            </form></td>
                        <td><form action="modificar.php" method="POST">
                            <input type="hidden" name="dia" value="jueves">
                            <input type="hidden" name="hora" value="<?=$cont?>">
                            <input type="submit" name="asig" value="<?=$clase->jueves?>">
                            </form></td>
                        <td><form action="modificar.php" method="POST">
                            <input type="hidden" name="dia" value="viernes">
                            <input type="hidden" name="hora" value="<?=$cont?>">
                            <input type="submit" name="asig" value="<?=$clase->viernes?>">
                            </form></td>
                        <?php $cont++;?>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>