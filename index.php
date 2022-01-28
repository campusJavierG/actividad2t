<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Productos</h1>
    <?php
    
    require("Productos.php");
    $articulo=new Productos(100,"camisetas",5,7.99);
    $articulo->setNombre("pantalon");
    echo "<p>El nuevo nombre es ---> ".$articulo->getNombre()."</p>";
    echo "<p>El nuevo unidad es ---> ".$articulo->getPrecio()."</p>";
    echo "<h3>".$articulo->calcularTotal()."</h3>";
    ?>
</body>
</html>
