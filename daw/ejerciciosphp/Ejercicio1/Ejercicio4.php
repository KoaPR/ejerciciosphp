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
        $codigo_categoria_elegido = @$_POST['codigo_categoria_elegido'];
        echo "<form method='post'>";
        echo "<tr><th>Codigo categoria</th><td>
                       <select name='codigo_categoria_elegido'>
                          <option value='A'>PRIMERA</option>
                          <option value='B'>SEGUNDA</option>
                          <option value='C'>TERCERA</option>
                        </select></td>";
                    
        echo "<input type='submit' value='EnviarCategoria' name='EnviarCategoria'></form>";
        
        if ($error == null) {
            $consulta="SELECT codigo_producto,descripcion,precio,stock,codigo_categoria FROM productos WHERE codigo_categoria='$codigo_categoria_elegido'  ";
           
            $consulta2="INSERT INTO productos (codigo_producto, descripcion, precio, stock, codigo_categoria) VALUES ('$codigo_producto', '$descripcion', ' $precio', '$stock', '$codigo_categoria_elegido'); ";
            $resultado = $conexion->query($consulta);
        if($resultado){
            $reg=$resultado->fetch_array();
            echo "<table>";
            echo "<tr><th>Codigo producto</th>";
            echo "<th>Descripcion</th>";
            echo "<th>Precio</th>";
            echo "<th>Stock</th>";
            echo "<th>Codigo categoria</th></tr>";
            while ($reg != null){
                print"<tr><td>". $reg['codigo_producto'] ."</td>";
                print"<td>". $reg['descripcion'] ."</td>";
                print"<td>". $reg['precio'] ."</td>";
                print"<td>". $reg['stock'] ."</td>";
                print"<td>". $reg['codigo_categoria'] ."</td></tr>";
                $reg = $resultado->fetch_array();
                
            }
            echo "</table>";
            
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
            
            
            echo "</table><input type='submit' value='Enviar' name='enviar'></form>";
        }
        }


        if ($error == null) {

       
           
    
        $conexion->close();
        }
        else{
            echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
        }
    ?>
</body>
</html>