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
            $conexion = new PDO("mysql:host=localhost;dbname=gestimal;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }
        if(isset($_REQUEST['cambiar'])){
            $codigo=$_REQUEST['codigo'];
            $ncodigo=$_REQUEST['ncodigo'];
            $descripcion=$_REQUEST['descri'];
            $precioc=$_REQUEST['precioc'];
            $preciov=$_REQUEST['preciov'];
            $margen=$_REQUEST['margen'];
            $stock=$_REQUEST['stock'];
            $conexion->query("UPDATE INTO productos VALUE ('$ncodigo','$descripcion','$precioc','$preciov','$margen','$stock') WHERE codigo='$codigo'");
            header('Location: index.php');
        }
        if(isset($_REQUEST['modificar'])){
            $codigo=$_REQUEST['codigo'];
            $consulta=$conexion->query("SELECT * FROM productos WHERE codigo='$codigo'");
            echo "SELECT * FROM productos WHERE codigo='$codigo'";
            $aux=$consulta->fetchObject();
            $descripcion=$aux->descripcion;
            $precioc=$aux->precioc;
            $preciov=$aux->preciov;
            $margen=$aux->margen;
            $stock=$aux->stock;
        }
    ?>
    <form action="modificar.php" method="post">
        Codigo:<input type="text" name="ncodigo" value="<?=$codigo?>"><br>
        <input type="hidden" value="<?=$codigo?>" name="codigo">
        Descripcion:<input type="text" name="descri" value="<?=$descripcion?>"><br>
        Precio de compra: <input type="number" step="any" name="precioc" value="<?=$precioc?>"><br>
        Precio de venta:<input type="number" step="any" name="preciov" value="<?=$preciov?>"><br>
        Margen:<input type="number" step="any" name="margen" value="<?=$margen?>"><br>
        Stock:<input type="number" name="stock" value="<?=$stock?>"><br>
        <input type="submit" name="cambiar" value="Cambiar">
    </form>
</body>
</html>