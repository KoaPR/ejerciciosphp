
<?php
    $conexion= new mysqli ("localhost", "root", "", "almacen");

    $opcion = @$_POST['EnviarModificacion'];
    $cod= @$_POST['Editar'];
    $nombre_producto = 'HOLA';
    $descripcion_producto = 'HOLA';
    $precio_producto = '199'; 
    
    $query = "UPDATE producto 
                SET nombre='bbb', descripcion='bbb', PVP='200' 
                WHERE cod = 'IXUS115HSAZ'";
        if ($result = $conexion->prepare($query)) {
            $result->bind_param("sss",$nombre_producto,  $descripcion_producto, $precio_producto);
            $result->execute();
        }
        $consulta = "SELECT cod, nombre_corto, PVP ,familia from producto WHERE cod = 'IXUS115HSAZ'";
        $resultado = $conexion->query($consulta);
        if (!$resultado){
            print " <p>Error en la consulta de producto.</p>\n";
        }
        else{
            foreach($resultado as $valor){
                echo "<tr>
				            <td>Producto: $valor[nombre_corto]</td>
				            <td>Precio: $valor[PVP]</td>
                            <td>
                                <form method='post'>
                                    <input type='submit' value='$valor[cod]' name='Editar'>
                                </form>
                            </td>
			             </tr>";
            }
        }

    
    

?>
