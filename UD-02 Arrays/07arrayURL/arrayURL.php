<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Array con URL</title>
        <?php
            require "factorial.php";      

            for($num=1;$num<=10;$num++)
                $factoriales[$num]=factorial($num);
            
        ?>
        <style>
            h2{
                font-family: 'Courier New', Courier, monospace;
                text-align: center;
            }

            div{
                width: 10%;
                margin: auto;
                text-align: center;
            }

            a{
                text-decoration: none;
                background-color: black;
                color: white;
                padding: 2% 10%;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <h2>Ejercicio factoriales por URL</h2>
        <div>
            <?php
                foreach($factoriales as $numero => $factorial)
                {
                    echo '<p><a href="mostrar.php?factorial='.$factorial.'&numero='.$numero.'">'.$numero.'</a></p>';
                }
            ?>
        </div>
    </body>
</html>