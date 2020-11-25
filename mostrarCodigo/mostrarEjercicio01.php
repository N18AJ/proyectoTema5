<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="author" content="Nerea Álvarez Justel">
        <meta name="application-name" content="Sitio Web">
        <meta name="description" content="Desarrollo del segundo curso de DAW">
        <meta name="keywords" content="DAW, DIW, DWEC, DWES, web">
        <!-- JS -->        
        <script type="text/javascript" src="../webroot/javascript/tuCodigo.js"></script>
        <!-- Recomendado 5 o 8 palabras clave, Cada palabra clave puede estar constituida por hasta 4 o 5 palabras. -->
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
                font-size: 10pt;
                margin-bottom: 15px;
            }
            h1{
               font-size: 20pt; 
            }
        </style>
    </head>

    <body> 
        <!-- Header -->
        <header id="header">
            <a href="../../../doc/cv.pdf" target="_blank"><img src="../webroot/media/images/cv2.png" alt="CV" width="55" class="icono_link"/></a>
            <a href="http://daw212.ieslossauces.es/"><img src="../webroot/media/images/logo2.png" alt="Logo" width="150" class="icono_logo"/></a>
            <a href="https://github.com/N18AJ" target="_blank"><img src="../webroot/media/images/git2.png" alt="GitHub" width="65" class="icono_git"/></a>
        </header>


        <!-- Main -->
        <div id="main">

            <!-- Tiles -->
            <section class="tiles">
                <article>
                    <header class="major">
                        <a href="../indexProyectoTema5.html"><img src="../webroot/media/images/atras2.png" alt="atras" width="45" class="icono_atras"/></a>
                        <h3>Ejercicio 01</h3>
                    </header>
                    <div id="cont">
                        <?php
                            /**
                            @author: Nerea Álvarez Justel
                            @since: 23/11/2020
                            @description: Mostrar ejercicio01.
                            */
                        echo "<h1>Programa</h1>";
                            highlight_file("../codigoPHP/ejercicio01/programa.php"); //Mostrar código de PROGRAMA
                        /*
                            echo "<h1>Detalle</h1>";    
                            highlight_file("../codigoPHP/ejercicio01/detalle.php"); //Mostrar código de DETALLE
                        */
                        echo "<h1>Login</h1>";    
                            highlight_file("../codigoPHP/ejercicio01/login.php"); //Mostrar código de LOGIN
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