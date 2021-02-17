<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once 'menu.php';

        $menu=new Menu();
        $menu->añadirEnlementos("google","www.google.com");
        $menu->añadirEnlementos("youtube","www.youtube.com");
        $menu->menuVertical();
        echo "<br><br>";
        $menu->menuHorizontal();
    ?>
</body>
</html>