<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mostrar Array URL</title>
        <style>
            h2{
                font-family: 'Courier New', Courier, monospace;
                text-align: center;
            }

            div{
                width: 15%;
                margin: auto;
                text-align: center;
            }
            p{
                border-radius: 10px;
                padding: 2% 5%;
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
        <h2>Mostrar Array URL</h2>
        <div>
            <?php
                echo '<p>El factorial de '.$_GET['numero'].' es '.$_GET['factorial'].'</p>';
            ?>
        </div>
    </body>
</html>
