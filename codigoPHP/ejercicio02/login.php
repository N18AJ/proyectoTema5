<?php

include '../../config/confDB.php';

$usuario="";
$password="";
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {//Autentificacion del usuario
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Se ha cancelado el LogIn';
} else {
    try {
        // Datos de la conexión a la base de datos
            $miDB = new PDO(HOST, USER, PASSWD);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Cómo capturar las excepciones y muestre los errores

        $usuarioIntroducido = $_SERVER['PHP_AUTH_USER'];
        $passwordIntroducido = $_SERVER['PHP_AUTH_PW'];
        $sql = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario='$usuarioIntroducido' AND T01_Password=SHA2('$usuarioIntroducido$passwordIntroducido',256)";
        $stmt = $miDB->prepare($sql);
        $stmt->execute();
        $consulta = $miDB->query($sql);
        
        $registro = $consulta->fetchObject();//S
        if($registro!=NULL){
            $usuarioDB =$registro->T01_CodUsuario;
            $passwordDB =$registro->T01_Password;
            header('Location: programa.php');
        }else{
            echo '<h1>Usuario incorrecto</h1>';
            echo '<a href="../../indexProyectoTema5.html">Atrás</a>';
        }
        
    } catch (PDOException $exc) { //Cuando se produce una excepcion se corta el programa y salta la excepción con el mensaje de error
        echo "Error: $exc->getMessage() <br>";
        echo "Codigo del error: $exc->getCode() <br>";
    } finally {
        unset($miDB);
    }
    
    echo $usuario;
    echo $password;
}
?>