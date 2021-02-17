<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Nuevo producto</h1>
    <form action="../Controller/cargarProducto.php" method="POST">
        Codigo: <input type="text" maxlength="11" name="codigo" required><br>
        Nombre: <input type="text" maxlength="20" name="nombre" required><br>
        Precio: <input type="number" step="any" name="precio" required><br>
        Stock: <input type="number" name="stock" required><br>
        <input type="submit" value="Subir">
    </form>
</body>
</html>