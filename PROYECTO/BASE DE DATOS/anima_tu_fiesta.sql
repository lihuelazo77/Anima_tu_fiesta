-- Eliminar y crear base de datos
DROP DATABASE IF EXISTS anima_tu_fiesta;
CREATE DATABASE anima_tu_fiesta;
USE anima_tu_fiesta;

-- Eliminar tablas si existen (orden correcto por dependencias)
DROP TABLE IF EXISTS ofrece;
DROP TABLE IF EXISTS califica;
DROP TABLE IF EXISTS carrito;
DROP TABLE IF EXISTS trabajador;
DROP TABLE IF EXISTS servicios;
DROP TABLE IF EXISTS usuario;

-- Crear tabla 'usuario'
CREATE TABLE usuario (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    apellido VARCHAR(20) NOT NULL,
    telefono INT NOT NULL,
    correo VARCHAR(50) NOT NULL UNIQUE,
    domicilio VARCHAR(50) NOT NULL,
    contrasena VARCHAR(255) NOT NULL 
);

-- Crear tabla 'trabajador' (ID primero)
CREATE TABLE trabajador (
    id_u INT NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    PRIMARY KEY (oficio, id_u)
);

-- Crear tabla 'servicios'
CREATE TABLE servicios (
    nombre_s VARCHAR(20) PRIMARY KEY NOT NULL,
    descripcion VARCHAR(100) NOT NULL
);

-- Crear tabla 'carrito' (IDs primero)
CREATE TABLE carrito (
    id_u INT NOT NULL,
    id_trabajador INT NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    fecha DATE NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_u, oficio, id_trabajador, fecha)
);

-- Crear tabla 'califica' (IDs primero)
CREATE TABLE califica (
    id_u INT NOT NULL,
    id_trabajador INT NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    estrellas INT NOT NULL,
    reseña VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_u, oficio, id_trabajador)
);

-- Crear tabla 'ofrece'
CREATE TABLE ofrece (
    id_trabajador INT NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    nombre_s VARCHAR(20) NOT NULL,
    precio INT NOT NULL,
    PRIMARY KEY (id_trabajador, oficio, nombre_s)
);

-- Agregar claves foráneas

-- trabajador -> usuario
ALTER TABLE trabajador
    ADD CONSTRAINT trabajador_id_u_usuario_id
    FOREIGN KEY (id_u) REFERENCES usuario(id);

-- carrito -> usuario
ALTER TABLE carrito
    ADD CONSTRAINT carrito_id_u_usuario_id
    FOREIGN KEY (id_u) REFERENCES usuario(id);

-- carrito -> trabajador (clave compuesta)
ALTER TABLE carrito
    ADD CONSTRAINT carrito_trabajador_fk
    FOREIGN KEY (oficio, id_trabajador) REFERENCES trabajador(oficio, id_u);

-- califica -> usuario
ALTER TABLE califica
    ADD CONSTRAINT califica_id_u_usuario_id
    FOREIGN KEY (id_u) REFERENCES usuario(id);

-- califica -> trabajador (clave compuesta)
ALTER TABLE califica
    ADD CONSTRAINT califica_trabajador_fk
    FOREIGN KEY (oficio, id_trabajador) REFERENCES trabajador(oficio, id_u);

-- ofrece -> trabajador (clave compuesta)
ALTER TABLE ofrece
    ADD CONSTRAINT ofrece_trabajador_fk
    FOREIGN KEY (oficio, id_trabajador) REFERENCES trabajador(oficio, id_u);

-- ofrece -> servicios
ALTER TABLE ofrece
    ADD CONSTRAINT ofrece_nombre_s_servicios_nombre_s
    FOREIGN KEY (nombre_s) REFERENCES servicios(nombre_s);