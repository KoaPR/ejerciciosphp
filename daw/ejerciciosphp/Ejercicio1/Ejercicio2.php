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
        $consulta="SELECT descripcion_categoria,codigo_categoria FROM categorias ";
        $resultado = $conexion->query($consulta);
        if($resultado){
            $reg=$resultado->fetch_array();
            echo "<table>";
            echo "<tr><th>Categoria</th>";
            echo "<th>Codigo</th></tr>";
            while ($reg != null){
                print"<tr><td>". $reg['descripcion_categoria'] ."</td>";
                print"<td>". $reg['codigo_categoria'] ."</td></tr>";
                $reg = $resultado->fetch_array();
                
            }
            echo "</table>";
        }
        $conexion->close();
    }
    else{
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
    }
    ?>
</body>
</html>