
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DWES PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
	<div id = 'wrap'>
    	<div id = 'titulo-box'>
    		<h1>Listado de libros</h1>
    	</div>
    		<table id = 'table-box'>
    			<tr>
    				<th>NUMERO</th>
    				<th>TITULO</th>
    				<th>AUTOR</th>
    				<th>DESCRIPCION</th>
    				<th>PAGINAS</th>
    				<th>PRECIO</th>
    				<th>DISPONIBILIDAD</th>
    			</tr>
    			<?php 
        			include("PHPScripts/GetProducto.php");
    			?>
    		</table>
    		<div id="txt-content">
        		<?php 
            		include("PHPScripts/CrearTXT.php");
            		include("PHPScripts/MostrarTXT.php");
        		?>
        		<?php 
                    include("PHPScripts/CrearCSV.php");
                ?>
        	</div>
    </div>
</body>
</html>
