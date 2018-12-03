
	<?php
    	$myfile = fopen("biblioteca.txt", "r") or die("Error al abrir el txt");
    	echo nl2br(fread($myfile,filesize("biblioteca.txt")));
    	fclose($myfile);
	?>
	