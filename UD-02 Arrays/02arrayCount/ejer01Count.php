<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EjercicioArray01</title>
        <link rel="stylesheet" type="text/css" href="../!css/style.css">
        <?php
            include "factorial.php";        

            for($j=0;$j<=10;$j++)
                $factoriales[$j]=factorial($j);
            
        ?>
    </head>
    <body>
        <h2>Ejercicio Array 2</h2>
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        FACTORIAL DEL 0 AL 10
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
                        for($i=0;$i<=10;$i++)
                        {
                            echo "<tr><td>$i</td><td>$factoriales[$i]</td></tr>";
                        }

                        echo print_r($factoriales);
                        // echo count($factoriales);
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