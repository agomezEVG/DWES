<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Numero par</title>
        <style>
            table{
                margin: auto;
                width: 30%;
                border: 1px solid transparent;
                text-align: center;
            }
            th,td{
                background-color: teal;
                color: white;
                border: 1px solid transparent;
                border-collapse: collapse;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <th>Número</th>
                <th>Cuadrado</th>
                <th>PAR</th>
            </thead>
            <tbody>
                <?php
                    echo '<td>'.$_GET['numero'].'</td>'.'<td>'.$_GET['cuadrado'];
                ?>
            </tbody>
        </table>
    </body>
</html>