<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php
            // require calcularNumero.php;
        ?>
        <style>
            form{
                width: 30%;
                padding: 2% 5%;
                margin: auto;
                border-radius: 10px;
                background-color: lightgray;
                text-align: center;
            }

            label{
                display: inline-block;
                width: 50%;
            }

            input{
                margin: 1%;
                width: 50%;
            }
            
        </style>
    </head>
    <body>
        <form action="calcularNumero.php" method="get">
            <label for="numero">Numero a enviar</label>
            <input type="number" name="numero"/>
            <input type="submit" name="Enviar" id="Enviar"/>
        </form>
    </body>
</html>