
	<?php
    	$dsn = 'mysql:dbname=almacen;host=127.0.0.1';
    	$usuario = 'root';
    	$contraseña = '';
    	
    	$codigo_buscado= @$_POST['familia_elegida'];
    	
    	try{
    	   $conexion = new PDO($dsn, $usuario, $contraseña);
    	   $consulta = "SELECT cod, nombre_corto, PVP ,familia from producto WHERE familia ='$codigo_buscado'";
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
        }
      
        catch (PDOException $e){
            print "<p>Error al conectar con la BD: " . $e->getMessage() . "</p/>";
            exit();
        }
    	
	?>
	
