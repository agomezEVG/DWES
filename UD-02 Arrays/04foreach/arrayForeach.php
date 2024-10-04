<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Array con foreach</title>
        <link rel="stylesheet" type="text/css" href="../!css/style.css">
        <?php
            require "factorial.php";      

            for($j=1;$j<=10;$j++)
                $factoriales[$j]=factorial($j);
            
        ?>
    </head>
    <body>
    <h2>Ejercicio Array con foreach</h2>
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
                <div>
                    <?php
                        foreach($factoriales as $indice => $valor)
                        {
                            echo '<p><a href="mostrar.php?factorial='.$valor.'&numero='.$indice.'">'.$indice.'</a></p>';
                        }
                    ?>
                </div>
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