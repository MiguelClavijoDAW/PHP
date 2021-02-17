<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once 'Cubo.php';
        $c1=new cubo(10,4);
        $c2=new cubo(8,11);
        echo "Cubo 1: ".$c1->__toString()."<br>";
        echo "Cubo 2: ".$c2->__toString()."<br>";
        $c1->verter($c2);
        echo "Cubo 1: ".$c1->__toString()."<br>";
        echo "Cubo 2: ".$c2->__toString()."<br>";
        $c2->setCantidad(0);
        echo "Cubo 1: ".$c1->__toString()."<br>";
        echo "Cubo 2: ".$c2->__toString()."<br>";
        $c1->verter($c2);
        echo "Cubo 1: ".$c1->__toString()."<br>";
        echo "Cubo 2: ".$c2->__toString()."<br>";

    ?>
</body>
</html>