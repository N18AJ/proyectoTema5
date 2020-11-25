-- Cambiar nombre de la base de datos y el de usuario --
-- DAW2XXProyectoTema5 || DAW2XXLoginLogoffTema5 || DAW2XXMtoDepartamentosPDOTema5 --

-- Crear base de datos --
    CREATE DATABASE if NOT EXISTS DAW212DBProyectoTema5;
-- Uso de la base de datos. --
    USE DAW212DBProyectoTema5;

-- Crear tablas. --
    CREATE TABLE IF NOT EXISTS Departamento(
        CodDepartamento varchar(3) PRIMARY KEY,
        DescDepartamento varchar(255) NOT null,
        FechaBajaDepartamento int DEFAULT null, -- Valor por defecto null, ya que cuando lo creas no puede estar de baja logica
        FechaCreacionDepartamento int NOT null,
        VolumenNegocio float NOT null
    );
    CREATE TABLE IF NOT EXISTS Usuario(
        CodUsuario varchar(15) PRIMARY KEY,
        DescUsuario varchar(250) NOT null,
        Password varchar(64) NOT null,
        Perfil enum('administrador', 'usuario') default 'usuario', -- Valor por defecto usuario
        FechaHoraUltimaConexion int,
        NumConexiones int default 0,
        ImagenUsuario mediumblob
    );

-- Crear del usuario --
    CREATE USER IF NOT EXISTS 'usuarioDAW212DBProyectoTema5'@'%' identified BY 'paso'; 

-- Dar permisos al usuario --
    GRANT ALL PRIVILEGES ON DAW212DBProyectoTema5.* TO 'usuarioDAW212DBProyectoTema5'@'%'; 

-- Hacer el flush privileges, por si acaso --
    FLUSH PRIVILEGES;


