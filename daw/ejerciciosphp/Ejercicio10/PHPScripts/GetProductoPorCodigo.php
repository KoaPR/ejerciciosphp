
	<?php
    	$dsn = 'mysql:dbname=almacen;host=127.0.0.1';
    	$usuario = 'root';
    	$contraseña = '';
    	
    	$codigo= @$_POST['Editar'];

    	    echo $_POST['nombremod'];
    	
    	try{
    	   $conexion = new PDO($dsn, $usuario, $contraseña);
    	   $consulta = "SELECT cod, nombre_corto, PVP ,familia from producto WHERE cod ='$codigo'";
    	   $resultado = $conexion->query($consulta);
    	}

      
        catch (PDOException $e){
            print "<p>Error al conectar con la BD: " . $e->getMessage() . "</p/>";
            exit();
        }
    	
	?>
	
