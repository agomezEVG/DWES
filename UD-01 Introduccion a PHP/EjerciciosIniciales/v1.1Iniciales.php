<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio1.1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Ejercicio Inicial 1.1</h2>
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        TABLA DE FACOTRIALES DEL 1 AL 10
                    </th>
                </tr>
                <tr>
                    <th>
                        NÚMERO
                    </th>
                    <th>
                        FACTORIAL
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $numero=10;
                $i=1;
                while($i<=$numero && $numero>=1)
                {
                    $total=1;
                    $j=1;
                    while($j<=$i)
                    {
                        $total*=$j;
                        $j++;
                    }
                    echo "<tr><td>$i</td><td>$total</td></tr>";
                    $i++;
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