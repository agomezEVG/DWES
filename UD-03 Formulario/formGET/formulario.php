<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desastres Naturales</title>

        <link rel="icon" href="../img/icono.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <div>
                <div><img src="../img/logo.jpg" alt="Logo de la imagen"></div>
                <nav>
                    <a href="index.html">Inicio</a>
                    <a href="desastres.html">Desastres</a>
                </nav>
                <h4 id="nombre">Álvaro Gómez Delgado 2ºDAW</h4>
            </div>
           <div id="titulo">
                <h1>Frente al Desastre</h1>
                <h3>Preparados para lo inesperado</h3>
           </div>
        </header>
        <aside>
            <div>
                <ul>
                     <li>
                        <h3>Páginas externas</h3>
                        <ul>
                            <li><a href="https://www.oxfam.org/es/5-desastres-naturales-que-reclaman-medidas-contra-el-cambio-climatico" target="_blank">Desastres naturales y cambio climático - Oxfam</a></li>
                            <li><a href="https://www.worldwildlife.org/descubre-wwf/historias/acaso-el-cambio-climatico-esta-aumentando-el-riesgo-de-desastres" target="_blank">El riesgo de desastres por el cambio climático - WWF</a></li>
                            <li><a href="https://onu-habitat.org/index.php/sequias-tormentas-e-inundaciones-el-agua-y-el-cambio-climatico-dominan-la-lista-de-desastres" target="_blank">El agua y el cambio climático - ONU Habitat</a></li>
                            <li><a href="https://www2.cruzroja.es/web/ahora/-/desastres-naturales-cambio-climatico-impacto-personas-mas-vulnerables" target="_blank">Impacto de desastres en personas vulnerables - Cruz Roja</a></li>
                        </ul>
                     </li>
                </ul>
            </div>
        </aside>
        <main>
            <section id="formulario">
                <form action="mostrar.php" method="get">
                    <div>
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre"/>
                    </div>
                    <div>
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido"/>
                    </div>
                    <div>
                        <label for="edad">Edad</label>
                        <input type="number" name="edad"/>
                    </div>
                    <label for="sexo">Sexo</label>
                    <div id="preferencia">
                        <input type="radio" name="sexo" value="Hombre"/>
                        <label for="hombre">Hombre</label>
                        <input type="radio" name="sexo" value="Mujer"/>
                        <label for="mujer">Mujer</label>
                        <input type="radio" name="sexo" value="Otro"/>
                        <label for="otro">Otro</label>
                    </div>
                    <div id="tipodesastre">
                        <label for="tipo">Tipo de desastre</label>
                        <select name="tipo">
                            <option value="selecciona" disabled selected hidden>Selecciona una opción</option>
                            <option value="inundacion">Inundación</option>
                            <option value="tornado">Tornado</option>
                            <option value="incendio">Incendio</option>
                            <option value="sequia">Sequia</option>
                        </select>
                    </div>
                    <div>
                        <label for="comentario">Comentario</label>
                        <textarea name="comentario"></textarea>
                    </div>
                    <div>
                        <label for="terminos">Aceptar terminos y condiciones</label>
                        <input type="checkbox" name="terminos[]"/>
                        <label for="infoCorreo">Recibir informacion por correo</label>
                        <input type="checkbox" name="terminos[]"/>
                    </div>
                    <div id="reiniciarEnviar">
                        <input type="submit" name="enviar" value="Enviar experiencia"/>
                        <input type="reset" value="Reiniciar formulario"/>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>