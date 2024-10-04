<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array de imagenes</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head> 
    <body>
        <div>
            <h1>Array de imagenes</h1>
            <?php
            require "guardar.php";
            
            foreach($imagenes as $nombre => $ruta)
            {
                echo '<h2>'.$nombre.'</h2>';
                echo '<img src="img/'.$ruta.'">';
            }
            ?>
        </div>
    </body>
</html>