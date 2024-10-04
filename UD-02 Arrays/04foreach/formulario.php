<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
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
    <form action="ejer01Dinamico.php" method="$_GET">
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
    </body>
</html>