<!-- Archivo que instancia la clase fecha y realiza la comprobación. -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TAR-06.02 - 02</title>
    </head>
    <body>
        <?php
            require_once 'proceso.php';

            $objFecha = new Fecha();
            $objFecha->comprobar($_GET['fecha']);

            $objFecha->mostrarFecha();
            $objFecha->mostrarBisiesto();
        ?>
    </body>
</html>
