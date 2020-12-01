<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="author" content="Nerea Álvarez Justel">
        <meta name="robots" content="index, follow" />
        <title>DAW. Nerea Álvarez Justel</title>       
<!-- CSS -->
        <link href="../../webroot/css/estilos.css" rel="stylesheet" type="text/css">
<!-- Favicon -->
        <link rel="icon" href="../../../../../favicon.png" type="x-icon">
<!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
        <style>
            #cont{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #botonAceptar{
                margin:20px;
                text-align: center;
                color: #18B618; 
                width: 120px; 
                height: 40px; 
                font-size: 10pt;
                border-radius: 10px;
                border: 2px solid #18B618;
            }
            #botonCancelar{
                margin:20px;
                text-align: center;
                color: #E72727; 
                width: 120px; 
                height: 40px; 
                font-size: 10pt;
                border-radius: 10px;
                border: 2px solid #E72727;
            }
        </style>
    </head>

    <body> 
        <!-- Header -->
        <header id="header">
            <a href="../../../../doc/cv.pdf" target="_blank"><img src="../../webroot/media/images/cv2.png" alt="CV" width="55" class="icono_link"/></a>
            <a href="http://daw212.ieslossauces.es/"><img src="../../webroot/media/images/logo2.png" alt="Logo" width="150" class="icono_logo"/></a>
            <a href="https://github.com/N18AJ" target="_blank"><img src="../../webroot/media/images/git2.png" alt="GitHub" width="65" class="icono_git"/></a>
        </header>


        <!-- Main -->
        <div id="main">

            <!-- Tiles -->
            <section class="tiles">
                <article>
                    <header class="major">
                        <a href="../../indexProyectoTema5.html"><img src="../../webroot/media/images/atras2.png" alt="atras" width="45" class="icono_atras"/></a>
                        <h3>Ejercicio 02</h3>
                    </header>
                    <div id="cont">
                            <!-- 
                            @author: Nerea Álvarez Justel
                              @since: 27/11/2020 
                              @description: 1 .- Conexión a la base de datos con la cuenta usuario y tratamiento de errores.
                             -->
                        <h3>Usuario aceptado</h3>
                                    <!-- Llamada al login-->
                            <form action="<?php ?>" method="post">
                                
                                <input type="button" id="botonAceptar" name="detalle" value="Detalle" onclick="location='detalle.php'">
                                
                                <a href="../../indexProyectoTema5.html"><input type="button" id="botonCancelar" name="salir" value="Salir" onclick="location='logout.php'"></a>
                            </form>
                    </div> 
                </article>
            </section>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <a href="../../../../index.html"><div class="copyright">&copy; Nerea Álvarez Justel</div></a>
        </footer>
    </body>
</html>
