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
                    margin-left: 10%;
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
                        <a href="programa.php"><img src="../../webroot/media/images/atras2.png" alt="atras" width="45" class="icono_atras"/></a>
                        <h3>Ejercicio 01</h3>
                    </header>
                    <div id="cont">
                        <?php
                            /*
                              @author: Nerea Álvarez Justel
                              @since: 23/11/2020 
                              @description: Muestra de informacion del ejercicio 1.
                             */
                            echo "<h1>Información:</h1>" . "<br>";
                            echo "Usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br>";
                            echo "Contraseña: " . $_SERVER['PHP_AUTH_PW'] . "<br>" . "<br>";
                            ?>
                           <h3>Información</h3>
                         <table border="1">
                                <tr>
                                    <th>Variable</th>
                                    <th>Valor</th>
                                </tr>
                                <?php
                                foreach ($_SERVER as $codigoIndice => $valor) { //Con el foreach recorremos el array
                                    ?>
                                    <tr>
                                        <td><?php echo '<b>$_SERVER[' . "'" . $codigoIndice . "'" . "]</b>"; ?></td>
                                        <td><?php echo "$valor"; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                            <?php
                            echo "Usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br>" . "<br>";
                            echo "Contraseña: " . $_SERVER['PHP_AUTH_PW'] . "<br>" . "<br>";
                            echo "<h3>Valor Session</h3>";
                                print_r($_SESSION) . "<br>";
                            echo "<h3>Valor Cookie</h3>";
                                print_r($_COOKIE) . "<br>";
                            echo "<h3>Valor Server</h3>";
                                print_r($_SERVER) . "<br>";
                            phpinfo();
                            
                            echo "<a href='programa.php'><input type='button' name='volver' value='Volver'></a><br><br>";
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
