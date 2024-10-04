<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EjercicioArray01 Dinamico</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <?php
            require "factorial.php";
        ?>
    </head>
    <body>
        <h2>Ejercicio Array Dinamico</h2>
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        <?php
                            echo "FACTORIAL DEL $numero1 AL $numero2";
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>NÚMERO</th>
                    <th>FACTORIAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=$numero1;$i<=$numero2;$i++)
                    {
                        echo "<tr><td>$i</td><td>$factoriales[$i]</td></tr>";
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