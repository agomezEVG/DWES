<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciales 4</title>
        <link rel="stylesheet" href="!css/style.css">
        <?php
            require "!funciones/v4Factorial.php";
        ?>
    </head>
    <body>
        <h2>Ejercicios Inicial PHP 4</h2>
        <form method="$_GET">
            <div>
                <label for="numero1">Número 1</label>
                <input type="number" name="numero1"/>
            </div>
            <div>
                <label for="numero2">Número 2</label>
                <input type="number" name="numero2"/>
            </div>
            <input type="submit"/>
        </form>
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        <?php
                            $numero1=$_GET["numero1"];
                            $numero2=$_GET["numero2"];
                            echo "Tabla de factorial del $numero1 al $numero2"
                        ?>
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
                    for($j=$numero1;$j<=$numero2;$j++){
                        $factorial=factorial($j);
                        echo "<tr><td>$j</td><td>$factorial</td></tr>";
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