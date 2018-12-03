
	<?php
    	$dsn = 'mysql:dbname=almacen;host=127.0.0.1';
    	$usuario = 'root';
    	$contraseña = '';
    	
    	try{
    	   $conexion = new PDO($dsn, $usuario, $contraseña);
    	   $consulta = "SELECT nombre, cod from familia";
    	   $resultado = $conexion->query($consulta);
    	   if (!$resultado){
    	       print " <p>Error en la consulta.</p>\n";
    	   }
    	   else {
    	       foreach($resultado as $valor){
    	           echo "<option value=$valor[cod]>$valor[nombre]</option>";
    	       }
    	   }
        }
      
        catch (PDOException $e){
            print "<p>Error al conectar con la BD: " . $e->getMessage() . "</p/>";
            exit();
        }
    	
	?>
	
