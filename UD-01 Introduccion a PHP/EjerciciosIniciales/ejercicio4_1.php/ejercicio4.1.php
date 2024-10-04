<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio04</title>
        <link rel="stylesheet" href="style.css">
        <?php
            include "factorial.php";
        ?>
        <style>
            form{
                margin: 1% auto;
                padding: 1%;
                width: 30%;
                height: auto;
                border: 1px solid;
                text-align: center;  
            }

            input[type=number]{
                display: block;
                width: 100%;
                margin-bottom: 3%;
            }

            h2{
                text-align: center;
                font-family: 'Courier New', Courier, monospace;
            }

            table{
                border: 1px solid;
                border-collapse: collapse;
                width: 30%;
                height: 50%;
                margin: auto;
            }

            th{
                color: rgb(72, 110, 143); 
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                height: 2rem;   
            }

            td{
                border: 1px solid;
                width: 15%;
                text-align: center;

            }
        </style>
    </head>
    <body>
        <h2>Ejercicio Inicial 04</h2>
        <form method="$_GET">
            <div>
                <label for="numero1">Número 1</label>
                <input type="number" name="numero1" value=0 10/>
            </div>
            <div>
                <label for="numero2">Número 2</label>
                <input type="number" name="numero2" value=5 20/>
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