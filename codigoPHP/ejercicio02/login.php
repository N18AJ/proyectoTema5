<?php
    include '../../config/confDB.php';
    if (!isset($_SERVER['PHP_AUTH_USER'])) {//Autentificacion del usuario
        header('WWW-Authenticate: Basic realm="Contenido restringido"');
        header("HTTP/1.0 401 Unauthorized");
        exit;
        echo "<a href='../../indexProyectoTema5.html'><input type='button' name='salir' value='Salir'></a>";
    } else {
        $usuario = $_SERVER["PHP_AUTH_USER"]; 
        try {
            // Datos de la conexión a la base de datos
            $miDB = new PDO(HOST, USER, PASSWD);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Cómo capturar las excepciones y muestre los errores
            $consultaSQL = "SELECT * FROM Usuario WHERE CodUsuario = :codUsuario";
            $resultadoSQL = $miDB->prepare($consultaSQL);
            $resultadoSQL->bindValue("codUsuario", $_SERVER['PHP_AUTH_USER']);
            $resultadoSQL->execute();
            if ($resultadoSQL->rowCount() == 0) { //aceptado usuario, ejecutamos función
                header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                header('HTTP/1.0 401 Unauthorized');

                echo "Usuario no reconocido<br><br>";
                echo "<a href='../../indexProyectoTema5.html'><input type='button' name='salir' value='Salir'></a>";

                exit;
            } else {
                header('Location: programa.php');
            }
        } catch (PDOException $mensajeError) { //Cuando se produce una excepcion se corta el programa y salta la excepción con el mensaje de error
            echo "<h3>Mensaje de ERROR</h3>";
            echo "Error: " . $mensajeError->getMessage() . "<br>";
            echo "Código de error: " . $mensajeError->getCode();
        } finally {
            unset($miDB);
        }
    }
?>