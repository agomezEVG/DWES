<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // require_once 'ejemplo.php';
            require_once 'ejemplo2.php';
            $objEjemplo = new Ejemplo();
            
            $objEjemplo->metodo1();

            echo $objEjemplo->getDato();
        ?>
    </body>
</html>