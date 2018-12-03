
	<?php
    	$dsn = 'mysql:dbname=biblioteca;host=127.0.0.1';
    	$usuario = 'root';
    	$contraseña = '';
    	
    	try{
    	   $conexion = new PDO($dsn, $usuario, $contraseña);
    	   $consulta = "SELECT Numero, Titulo, Autor, Descripcion, Paginas, Precio, Disponibilidad FROM listalibros ORDER BY Titulo";
    	   $resultado = $conexion->query($consulta);
    	   if (!$resultado){
    	       print " <p>Error en la consulta de producto.</p>\n";
    	   }
    	   else{
    	       foreach($resultado as $valor){
    	           echo "<tr>
				            <td>$valor[Numero]</td>
				            <td>$valor[Titulo]</td>
                            <td>$valor[Autor]</td>
                            <td>$valor[Descripcion]</td>
                            <td>$valor[Paginas]</td>
                            <td>$valor[Precio]</td>
                            <td>$valor[Disponibilidad]</td>        
			             </tr>";          
    	       }
    	   }
        }
      
        catch (PDOException $e){
            print "<p>Error al conectar con la BD: " . $e->getMessage() . "</p/>";
            exit();
        }
    	
	?>
	
