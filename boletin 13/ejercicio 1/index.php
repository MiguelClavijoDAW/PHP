<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Comprobar temperatura:</h1>
    <form action="temp.php" method="post">
        Elige una ciudad para saber el clima:
        <select name="lugar">
            <option value="Sevilla">Sevilla</option>
            <option value="Malaga">Malaga</option>
            <option value="Cadiz">Cadiz</option>
            <option value="Huelva">Huelva</option>
            <option value="Almeria">Almeria</option>
            <option value="Jaen">Jaen</option>
            <option value="Cordoba">Cordoba</option>
            <option value="Granada">Granada</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>