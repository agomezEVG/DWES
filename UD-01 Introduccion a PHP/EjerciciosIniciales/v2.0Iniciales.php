<!--Crear una funcion para calcular el factorial de un número-->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciales 2</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Ejercicio Inicial PHP 2</h2> 
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        FACTORIAL DE UN NÚMERO
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
                $numero=5;
                factorial($numero);

                function factorial($num)
                {   
                    $factorial=1;
                    for($i=1;$i<=$num;$i++)
                    {
                        $factorial*=$i;
                    }
                    echo "<tr><td>$num</td><td>$factorial</td></tr>";
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