<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factorial de un numero</title>
    </head>
    <body>
        <?php
            $numero=5;
            $total=1;
            echo '<h1>'."Factorial de un numero".'</h1>';

            echo '<h2>'."El factorial de 0 es 1".'</h2>';
            for($j=1;$j<=$numero;$j++)
            {
                $total*=$j;
                echo '<h2>'."El factorial de ".$j. " es ".$total.'</h2>';
            }

           
        ?>
    </body>
</html>