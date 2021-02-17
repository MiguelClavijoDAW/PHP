<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=horariophp;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }
        if(isset($_REQUEST['cambiar'])){
            $hora=$_REQUEST['hora'];
            $dia=$_REQUEST['dia'];
            $asig=$_REQUEST['nueva'];
            $conexion->query("UPDATE horario SET $dia=\"$asig\" WHERE hora=$hora");
            header('Location: index.php');
        }

        if(isset($_REQUEST['asig'])){
            $hora=$_REQUEST['hora'];
            $dia=$_REQUEST['dia'];
            $asig=$_REQUEST['asig'];
            ?>
                <form action="modificar.php" method="post">
                    Introduce la asignatura: 
                    <select name="nueva" required>
                        <option value="DWES">DWES</option>
                        <option value="DWEC">DWEC</option>
                        <option value="DIW">DIW</option>
                        <option value="DAW">DAW</option>
                        <option value="LC">LC</option>
                        <option value="EIE">EIE</option>
                    </select>
                    <input type="hidden" name="dia" value="<?=$dia?>">
                    <input type="hidden" name="hora" value="<?=$hora?>">
                    <input type="submit" name="cambiar" value="Cambiar">
                </form>
            <?php

        }else{
            header('Location: index.php');
        }
    ?>
</body>
</html>