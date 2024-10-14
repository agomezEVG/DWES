<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TAR-06.02 - 01</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <h2>Resultado del calculo</h2>
        <?php
            //1 Llamar al archivo que realizar las operaaciones
            require_once 'numero.php';
            //2 Recoger variables del formulario
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            $operacion = $_GET['operacion'];
            //3 Instanciar la clase que se va a utilizar
            $objNumero = new Numero(); //$numero1, $numero2
            //4 Dependiendo del simbolo enviar a una clase concreta.
            switch  ($operacion) {
                case '+':
                    $resultado=$objNumero->sumar($numero1, $numero2);
                    break;
                case '-':
                    $resultado=$objNumero->restar($numero1, $numero2);
                    break;
                case '*':
                    $resultado=$objNumero->multiplicar($numero1, $numero2);
                    break;
                case '/':
                    $resultado=$objNumero->dividir($numero1, $numero2);
            }
            //5 Sacamos el resultado y lo mostramos en un metodo visualizar
            $objNumero->visualizar($resultado, $operacion);
        ?>
    </body>
</html>