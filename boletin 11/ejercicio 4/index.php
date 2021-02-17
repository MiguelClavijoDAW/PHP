<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once 'Factura.php';
        $f1=new factura(date("d-M-Y H:i:s"));
        $f1->añadirProducto("monitor",100,2);
        $f1->añadirProducto("raton",25,5);
        $f1->imprimeFactura();
        $f1->pagar();
        $f1->imprimeFactura();
    ?>
</body>
</html>