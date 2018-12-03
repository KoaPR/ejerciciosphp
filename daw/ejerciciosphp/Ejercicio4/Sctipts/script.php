<?php
     $conexion = new mysqli('localhost', 'root', '', 'votos');
     $error = $conexion->connect_errno;
     if ($error == null) {
    $resultado = $conexion->query('SELECT votos1, votos2 FROM votos');
    if ($resultado) {
        foreach ($conexion->query('SELECT * FROM votos') as $row){
            $total_votos="$row[votos1]"+"$row[votos2]";
            
            $porcentaje1="$row[votos1]"/"$total_votos"*"100";
            $porcentaje2="$row[votos2]"/"$total_votos"*"100";
            echo "<tr>
                    <td>
                        Si
                    </td>
                    <td>
                        $row[votos1]
                    </td>
                    <td>
                        ". round($porcentaje1 ,2). "
                    </td>
                    <td class='td-grafico'>
                        <img src='imagenes/puntoamarillo.gif' width = " . $porcentaje1*4 ." height = '10px'>
                    </td>
                </tr>
                    <td>
                        No
                    </td>
                    <td>
                        $row[votos2]
                    </td>
                    <td>
                        ". round($porcentaje2 ,2). "
                    </td>
                    <td class='td-grafico'>
                        <img src='imagenes/puntoamarillo.gif' width = " . $porcentaje2*4 ." height = '10px'>
                    </td>

                <tr>";
            
        }
    }
    $conexion->close();
     }
?>