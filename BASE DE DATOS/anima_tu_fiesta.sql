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
DROP TABLE IF EXISTS eventos;

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

-- Crear tabla 'trabajador'
CREATE TABLE trabajador (
    id_usuario INT NOT NULL,
    nombre_artistico VARCHAR(20) NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    ciudad VARCHAR(20) NOT NULL,
    PRIMARY KEY (oficio, id_usuario)
);

-- Crear tabla 'servicios'
CREATE TABLE servicios (
    nombre_servicio VARCHAR(20) PRIMARY KEY NOT NULL,
    descripcion VARCHAR(100) NOT NULL
);

-- Crear tabla 'carrito'
CREATE TABLE carrito (
    id_usuario INT NOT NULL,
    id_trabajador INT NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    fecha DATE NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_usuario, oficio, id_trabajador, fecha)
);

-- Crear tabla 'califica'
CREATE TABLE califica (
    id_usuario INT NOT NULL,
    id_trabajador INT NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    estrellas INT NOT NULL,
    reseña VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_usuario, oficio, id_trabajador)
);

-- Crear tabla 'ofrece'
CREATE TABLE ofrece (
    id_trabajador INT NOT NULL,
    oficio VARCHAR(20) NOT NULL,
    nombre_servicio VARCHAR(20) NOT NULL,
    precio INT NOT NULL,
    PRIMARY KEY (id_trabajador, oficio, nombre_servicio)
);

-- Crear tabla 'eventos'
CREATE TABLE eventos (
    id_evento INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_evento VARCHAR(50) NOT NULL,
    fecha_evento DATE NOT NULL,
    descripcion_evento VARCHAR(200) NOT NULL
);

-- Agregar claves foráneas

-- trabajador -> usuario
ALTER TABLE trabajador
    ADD CONSTRAINT trabajador_id_usuario_usuario_id
    FOREIGN KEY (id_usuario) REFERENCES usuario(id);

-- carrito -> usuario
ALTER TABLE carrito
    ADD CONSTRAINT carrito_id_usuario_usuario_id
    FOREIGN KEY (id_usuario) REFERENCES usuario(id);

-- carrito -> trabajador
ALTER TABLE carrito
    ADD CONSTRAINT carrito_trabajador_fk
    FOREIGN KEY (oficio, id_trabajador) REFERENCES trabajador(oficio, id_usuario);

-- califica -> usuario
ALTER TABLE califica
    ADD CONSTRAINT califica_id_usuario_usuario_id
    FOREIGN KEY (id_usuario) REFERENCES usuario(id);

-- califica -> trabajador
ALTER TABLE califica
    ADD CONSTRAINT califica_trabajador_fk
    FOREIGN KEY (oficio, id_trabajador) REFERENCES trabajador(oficio, id_usuario);

-- ofrece -> trabajador
ALTER TABLE ofrece
    ADD CONSTRAINT ofrece_trabajador_fk
    FOREIGN KEY (oficio, id_trabajador) REFERENCES trabajador(oficio, id_usuario);

-- ofrece -> servicios
ALTER TABLE ofrece
    ADD CONSTRAINT ofrece_nombre_servicio_servicios_nombre_servicio
    FOREIGN KEY (nombre_servicio) REFERENCES servicios(nombre_servicio);
