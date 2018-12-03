<?php
    $conexion = new mysqli('localhost', 'root', '', 'agenda');
    $error = $conexion->connect_errno;
    
    if ($error == null) {
        $consulta="SELECT `id`,'nombre`,`telefono` FROM `usuarios";
        $resultado = $conexion->query($consulta);
    if($resultado){
        $reg=$resultado->fetch_array();
        echo "<table border 1px>";
        echo "<tr><th>Nombre</th>";
        echo "<th>Telefono</th></tr>";
        while ($reg != null){
            print"<tr><td>". $reg['nombre'] ."</td>";
            print"<td>". $reg['telefono'] ."</td></tr>";
            $reg = $resultado->fetch_array();
            
        }
        echo "</table>";
    }
    }
    else{
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
    }
    
    $nombre = @$_POST['nombre'];
    $telefono = @$_POST['telefono'];
    
    if ($error == null) {
        $consulta="INSERT INTO `usuarios` (`nombre`,`telefono`) VALUES ('$nombre', '$telefono'); ";
        $resultado = $conexion->query($consulta);
   
    echo "<form method='post'>";
        echo "<table border 1px>";
        echo "<tr><th>Nombre</th><td>
                    <input type='text' name='nombre'/></td>";
        echo "<tr><th>Telefono</th><td>
                    <input type='text' name='telefono'/></td>";
        
        
        echo "</table><input type='submit' value='Enviar' name='enviar'></form>";

    $conexion->close();
    }
    else{
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
    }
?>