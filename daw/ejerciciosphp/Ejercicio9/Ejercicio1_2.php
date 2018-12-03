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
    		<h1>Modificar producto</h1>
    	</div>
    	<div id = 'content-box'>
    	
    		<?
        		if (isset($_GET['Editar'])) {
        		    echo $_GET['Editar'];
        		} else {
        		    echo "<p>hola</p>";
        		}
            ?>
    	</div>
    </div>
</body>
</html>
