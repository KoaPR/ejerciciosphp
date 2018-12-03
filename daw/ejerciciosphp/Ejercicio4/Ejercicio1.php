<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    </head>
    <body>
        <div id="wrap">
            <h1>Encuesta</h1>
            <div id="form-content">
                <p>Cree ud. que el precio de la vivienda seguira subiendo al ritmo actual?</p>
                <form method="post" autocomplete="off">
                    <label><input type="radio" name="opcion" value="si" required>Si</label><br>
                    <label><input type="radio" name="opcion" value="no" >No</label><br>
                    <input id="btn" type="submit" name="Enviar">
                </form>
            
            <table>
                <tr>
                    <th>Respuesta</th>
                    <th>Votos</th>
                    <th>Porcentaje</th>
                    <th>Grafica</th>
                </tr>
                <?php include('Sctipts\actualizarEncuesta.php')?>
                <?php include('Sctipts\script.php')?>
            </table>
            <?php 
                
            ?>
            </div>
        </div>
        <script>
            if (window.history.replaceState) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>