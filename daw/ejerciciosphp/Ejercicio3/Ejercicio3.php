
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
    $conexion = new mysqli('localhost', 'root', '', 'inmobiliaria');
    $error = $conexion->connect_errno;
    
    if ($error == null) {
        $consulta="SELECT titulo,texto,categoria,DATE_FORMAT(fecha, '%d/%m/%y') fecha,imagen FROM noticias  ORDER BY fecha DESC";
        $resultado = $conexion->query($consulta);
    if($resultado){
        $reg=$resultado->fetch_array();
        echo "<table border 1px>";
        echo "<tr><th>Titulo</th>";
        echo "<th>Texto</th>";
        echo "<th>Categoria</th>";
        echo "<th>Fecha</th>";
        echo "<th>Imagen</th>";
        while ($reg != null){
            print"<tr><td>". $reg['titulo'] ."</td>";
            print"<td>". $reg['texto'] ."</td>";
            print"<td>". $reg['categoria'] ."</td>";
            print"<td>". $reg['fecha'] ."</td>";
            echo"<td>";
            if($reg['imagen'] != null){
                echo "<a href='imagenes/" .$reg['imagen']. "'><img src='imagenes/ico-fichero.gif'></a>";
            }
            echo"</td></tr>";
            
            
            $reg = $resultado->fetch_array();
            
        }
        echo "</table>";
    }
    }
    else{
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
    }
    
    $conexion->close();

?>
</body>
</html>