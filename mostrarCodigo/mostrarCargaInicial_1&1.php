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
        <link href="../webroot/css/estilos.css" rel="stylesheet" type="text/css">
        <!-- Favicon -->
        <link rel="icon" href="../../../../favicon.png" type="x-icon">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
        <style>
            div{
                font-family: 'Caveat';
                background-color: white;
            }
            #cont{
                margin-top: 15px;
                font-size: 11pt;
                margin-bottom: 15px;
            }
        </style>
    </head>

    <body> 
        <!-- Header -->
        <header id="header">
            <a href="../../../doc/cv.pdf" target="_blank"><img src="../webroot/media/images/cv2.png" alt="CV" width="55" class="icono_link"/></a>
            <a href="../../../../index.html"><img src="../webroot/media/images/logo2.png" alt="Logo" width="150" class="icono_logo"/></a>
            <a href="https://github.com/N18AJ" target="_blank"><img src="../webroot/media/images/git2.png" alt="GitHub" width="65" class="icono_git"/></a>
        </header>


        <!-- Main -->
        <div id="main">

            <!-- Tiles -->
            <section class="tiles">
                <article>
                    <header class="major">
                        <a href="../indexProyectoTema5.html"><img src="../webroot/media/images/atras2.png" alt="atras" width="45" class="icono_atras"/></a>
                        <h3>Carga Inicial 1&1</h3>
                    </header>
                    <div id="cont">
                        <?php
                            /**
                            @author: Nerea Álvarez Justel
                            @since: 23/11/2020
                            @description: Mostrar ejercicio01.
                            */

                            highlight_file("../scriptDB/CargarInicialDAW212DBProyectoTema5_1&1.sql"); //Mostrar código
                        ?>
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