<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mostrar Formulario</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>
    <body>
        <main id="datosenviados">
            <h2>Datos enviados</h2>
            <section>
                <?php
                    if(!empty($_GET["nombre"]))
                        echo '<p>Nombre: '.$_GET["nombre"].'<br></p>';
                    if(!empty($_GET["apellido"]))
                        echo '<p>Apellidos: '.$_GET["apellido"].'<br></p>';
                    if(!empty($_GET["edad"]))
                        echo '<p>Edad: '.$_GET["edad"].'<br></p>';
                    if(isset($_GET["sexo"]))
                        echo '<p>Sexo: '.$_GET["sexo"].'<br>'; 
                    if(!empty($_GET["tipo"]))
                        echo '<p>Tipo desastre: '.$_GET["tipo"].'<br></p>'; 
                    if(!empty($_GET["comentario"]))
                        echo '<p>Comentario: '.$_GET["comentario"].'<br></p>';
                    if(isset($_GET["terminos"]))
                        foreach($_GET["terminos"] as $indice => $valor){
                            echo '<p>Terminos y condiciones: '.$valor.'<br></p>';
                        }
                    echo '<br><br>';
                    var_dump($_GET);
                ?>
            </section>
            <a href="formulario.php">Volver al formulario</a>
        </main>
    </body>
</html>