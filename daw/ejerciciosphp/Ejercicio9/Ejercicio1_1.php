<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DWES PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
	<div id = 'wrap'>
    	<div id = 'titulo-box'>
    		<h1>Listado de productos por familia</h1>
    	</div>
    	<div id = 'content-box'>
    		<form method="post">
    			<select  id = 'familia_elegida' name='familia_elegida'>
    					<?php 
    					   include("PHPScripts/GetFamilia.php");
    					?>
                 </select>
                 <input type='submit' value='EnviarFamilia' name='Enviar Familia'>
    		</form>
    		<table id = 'table-box'>
    			<tr>
    				<th>PRODUCTOS</th>
    				<th>PRECIO</th>
    			</tr>
    			<?php 
        			include("PHPScripts/GetProducto.php")
    			?>
    		</table>
    	</div>
    <div id="wrap2">
    	<div id = 'content-box'>
    		<form method="post">
    		<table>
        		<tr>
        			<td>
        				<label>Nombre
        			</td>
        			<td>
        					<input type='text' name='nombremod'>
        				</label>
        			</td>
        		</tr>
        		<tr>
        			<td>
            			<label>Descripcion
            		</td>
        			<td>
            				<input type='text' name='descripcionmod'>
            			</label>
    				</td>
        		</tr>
        		<tr>
        			<td>
            			<label>Precio
            		</td>
        			<td>
            				<input type='text' name='preciomod'>
            			</label>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type='submit' value='EnviarModificacion' name= 'Enviar Modificacion'>
            		</td>
            	</tr>
            </table>
    			
    		</form>
    		<?php 
    		  include("PHPScripts/UpdateProducto.php");
    		?>
    	</div>
    </div>
</body>
</html>
