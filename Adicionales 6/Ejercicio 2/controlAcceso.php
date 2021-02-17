<?php 
/**
 * Se pasa un perfil y devuelve un array dependiendo del perfil
 */
function dameTarjeta($a)
{
    $array=[[" ","1","2","3","4"],["A","A1","A2","A3","A4"],["B","B1","B2","B3","B4"],["C","C1","C2","C3","C4"],["D","D1","D2","D3","D4"],["E","E1","E2","E3","E4"]];
    $array1=[[" ","1","2","3","4"],["A","1A","2A","3A","4A"],["B","1B","2B","3B","4B"],["C","1C","2C","3C","4C"],["D","1D","2D","3D","4D"],["E","1E","2E","3E","4E"]];
if ($a=="usuario") {
    return $array;
}else{
    return $array1;
}
}
function compruebaClave($correcto,$letra,$numero,$puesto)
{
    echo $correcto[$letra][$numero];
    echo "<br>";
    echo $puesto;
if ($correcto[$letra][$numero]==$puesto) {
    return true;
} else {
    return false;
}

}
/**
 * Imprime la tarjeta pasandole un array por valor
 */
function imprimeTarjeta($a)
{
    echo'<table border="1">';
    for ($i = 0; $i < count($a); $i++) {
        echo "<tr>";
        echo "<td>";
        echo $a[$i][0];
        echo "</td>";
        for ($j = 1; $j < count($a[$i]) ; $j++) {
            echo "<td>".$a[$i][$j]."</td>";
        }
        echo "<tr>";
    }
    echo"</table>";
}
