
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
    
    $codigo_categoria_elegido = @$_POST['codigo_categoria_elegido'];
    echo "<form id='form-categoria' method='post'>";
    echo "<tr><th>Codigo categoria</th><td>
                   <select  id = 'codigo_categoria_elegido' name='codigo_categoria_elegido'>
                      <option name='todo' value='%'>TODAS</option>
                      <option value='costas'>COSTAS</option>
                      <option value='ofertas'>OFERTAS</option>
                      <option value='promociones'>PROMOCIONES</option>   
                    </select></td>";
    
    echo "<input type='submit' value='EnviarCategoria' name='EnviarCategoria'></form>";
    
    if ($error == null) {
        $consulta="SELECT titulo,texto,categoria,DATE_FORMAT(fecha, '%d/%m/%y') fecha,imagen FROM noticias WHERE categoria  LIKE '$codigo_categoria_elegido'  ORDER BY fecha DESC";
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
<?php
    if ( ! isset($_POST['codigo_categoria_elegido']) ) { 
?>
   <script>
      document.getElementById("form-categoria").submit();
   </script>
<?php
    }
?>
</body>
</html>