<?php
if (isset($_REQUEST['lugar'])) {
    $lugar = $_REQUEST['lugar'];
    $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$lugar,\
Spain&units=metric&appid=89fbadc72a86fe3c2d629056391a6fff
");
    $tiempo = json_decode($datos);
    echo "<h3>Datos sueltos: </h3>";
    echo "Temperatura: " . $tiempo->{"main"}->{"temp"} . "ºC<br>";
    echo "Humedad: " . $tiempo->{"main"}->{"humidity"} . "%<br>";
    echo "Presión: " . $tiempo->{"main"}->{"pressure"} . "mb<br>";
} else {
    header('Location: index.php');
}
