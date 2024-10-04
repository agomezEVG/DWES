<!--Muestra el factorial del 1 al 10-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciales 2</title>
        <link rel="stylesheet" href="!css/style.css">
    </head>
    <body>
        <h2>Ejercicio Inicial PHP 1</h2>
        <table>
            <thead>
                <tr>
                    <th colspan="2">TABLA DE FACOTRIALES DEL 1 AL 10</th>
                </tr>
                <tr>
                    <th>NÚMERO</th>
                    <th>FACTORIAL</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i=1;$i<=10;$i++)
                {
                    $factorial=1;
                    for($j=1;$j<=$i;$j++)
                    {
                        $factorial*=$j;
                    }
                    echo "<tr><td>$i</td><td>$factorial</td></tr>";
                }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        Alvaro Gomez Delgado
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>