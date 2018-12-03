
	<?php
    	function creartxt() {
    
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
        	       $myfile = fopen("biblioteca.txt", "w") or die("Error al abrir el txt");
        	       foreach($resultado as $valor){
        	           $txt = "$valor[Numero],$valor[Titulo], $valor[Autor], $valor[Descripcion],$valor[Paginas], $valor[Precio],$valor[Disponibilidad] \r\n";
        	           fwrite($myfile,$txt);
        	           
        	       }
        	       fclose($myfile);
        	   }
            }
          
            catch (PDOException $e){
                print "<p>Error al conectar con la BD: " . $e->getMessage() . "</p/>";
                exit();
            }
    	}
    	
	?>
	