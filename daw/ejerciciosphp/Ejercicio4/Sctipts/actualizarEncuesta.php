<?php
    $conexion= new mysqli ("localhost", "root", "", "votos");
    $error = $conexion->connect_errno;

    $opcion = @$_POST['opcion'];
    
    if(isset($opcion)){
        if($opcion=="si"){
            $votos1=1;
            $votos2=0;
        }
        else if($opcion=="no") {
            $votos1=0;
            $votos2=1;
        }
        $query = "UPDATE votos SET votos1= votos1+?, votos2=votos2+?";
        if ($result = $conexion->prepare($query)) {
            $result->bind_param("ii"/*  i entero , d double , s string*/,$votos1, $votos2);  
            $result->execute();
        }
    }
    

?>