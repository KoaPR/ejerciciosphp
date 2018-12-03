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
        if ($error == null) {
            $consulta="SELECT codigo_producto, descripcion , precio , stock , codigo_categoria  FROM  productos";
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
        }
        $resultado->close();
        $conexion->close();
        }
        else{
            echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
        }
    ?>
</body>
</html>
