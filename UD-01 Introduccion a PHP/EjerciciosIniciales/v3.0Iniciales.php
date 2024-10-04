<!--Nuevo .php con el factorial-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciales 3</title>
        <link rel="stylesheet" type="text/css "href="!css/style.css">
        <?php
            require "!funciones/factorial.php";
        ?>
    </head>
    <body>
        <h2>Ejercicios Inicial PHP 3</h2>
        <table>
            <thead>
                <tr>
                    <th colspan="2">FACTORIAL DE UN NÚMERO</th>
                </tr>
                <tr>
                    <th>NÚMERO</th>
                    <th>FACTORIAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $factorial=factorial($numero=7);
                    echo "<tr><td>$numero</td><td>$factorial</td></tr>";
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Alvaro Gomez Delgado</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>