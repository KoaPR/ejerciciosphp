<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="biblioteca.csv"');
    	$dsn = 'mysql:dbname=biblioteca;host=127.0.0.1';
    	$usuario = 'root';
    	$contraseña = '';
    	
    	try{
    	   $conexion = new PDO($dsn, $usuario, $contraseña);
    	   $consulta = "SELECT Numero, Titulo, Autor, Descripcion, Paginas, Precio, Disponibilidad FROM listalibros WHERE Precio>10";
    	   $resultado = $conexion->query($consulta);
    	   if (!$resultado){
    	       print " <p>Error en la consulta de producto.</p>\n";
    	   }
    	   else{

    	       $fp = fopen('php://output', 'wb');
    	       
    	       foreach($resultado as $valor){
    	           $data = array("$valor[Numero]" , "$valor[Titulo]" , "$valor[Autor]" , "$valor[Descripcion]" , "$valor[Paginas]" , "$valor[Precio]" , "$valor[Disponibilidad]");
    	           
    	           foreach ($data as $line ) {
    	               $val = explode(",", $line);
    	               fputcsv($fp, $val);
    	           }
    	          
    	       }
    	       
    	   }
        }
      
        catch (PDOException $e){
            print "<p>Error al conectar con la BD: " . $e->getMessage() . "</p/>";
            exit();
        }
    	
?>
	
