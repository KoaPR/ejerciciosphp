<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DWES PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <?php
        $conexion = new mysqli('localhost', 'root', '', 'tienda');
        $error = $conexion->connect_errno;
        $codigo_producto = @$_POST['codigo_producto'];
        $descripcion = @$_POST['descripcion'];
        $precio = @$_POST['precio'];
        $stock = @$_POST['stock'];
        $codigo_categoria = @$_POST['codigo_categoria'];
        if ($error == null) {
            $consulta="INSERT INTO productos (codigo_producto, descripcion, precio, stock, codigo_categoria) VALUES ('$codigo_producto', '$descripcion', ' $precio', '$stock', '$codigo_categoria'); ";
            $resultado = $conexion->query($consulta);
       
        echo "<form method='post'>";
            echo "<table>";
            echo "<tr><th>Codigo producto</th><td>
                        <input type='text' name='codigo_producto' pattern='[AA]{2}[1-9].{-1}'/></td>";
            echo "<tr><th>Descripcion</th><td>
                        <input type='text' name='descripcion' pattern='[A-Za-z0-9]+'/></td>";
            echo "<tr><th>Precio</th><td>
                        <input type='number' name='precio'/></td>";
            echo "<tr><th>Stock</th><td>
                        <input type='number' name='stock'/></td>";
            echo "<tr><th>Codigo categoria</th><td>
                       <select name='codigo_categoria'>
                          <option value='A'>PRIMERA</option>
                          <option value='B'>SEGUNDA</option>
                          <option value='C'>TERCERA</option>
                        </select></td>";
            
            
            echo "</table><input type='submit' value='Enviar' name='enviar'></form>";
    
    
    
        $conexion->close();
        }
        else{
            echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
        }
    ?>
</body>
</html>