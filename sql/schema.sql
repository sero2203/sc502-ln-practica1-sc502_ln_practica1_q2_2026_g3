-- Crear y seleccionar la base de datos
SET NAMES utf8mb4;
CREATE DATABASE IF NOT EXISTS novatech_academy_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE novatech_academy_db;


--  Tabla: profesores (Estudiante 3)

CREATE TABLE IF NOT EXISTS profesores (
  id           INT           NOT NULL AUTO_INCREMENT,
  nombre       VARCHAR(100)  NOT NULL,
  especialidad VARCHAR(100)  NOT NULL,
  bio          TEXT,
  foto         VARCHAR(255),
  correo       VARCHAR(150),
  cursos       VARCHAR(255),
  activo       TINYINT(1)    NOT NULL DEFAULT 1,
  created_at   TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO profesores (nombre, especialidad, bio, foto, correo, cursos, activo) VALUES
  ('Carlos Méndez', 'Desarrollo Web', 'Ingeniero en sistemas con 10 años de experiencia en desarrollo fullstack. Especialista en React, Node.js y arquitecturas modernas.', './images/profesor1.jpg', 'cmendez@novatechacademy.cr', 'Páginas Web, Contenedores', 1),
  ('Laura Solís', 'Bases de Datos', 'Experta en diseño y administración de bases de datos relacionales y no relacionales. Certificada en MySQL, PostgreSQL y MongoDB.', './images/profesor2.jpg', 'lsolis@novatechacademy.cr', 'Bases de Datos', 1),
  ('Diego Ramírez', 'Ciberseguridad', 'Especialista en seguridad informática y ethical hacking. Ha trabajado con empresas del sector financiero protegiendo infraestructuras críticas.', './images/profesor3.jpg', 'dramirez@novatechacademy.cr', 'Ciberseguridad', 1),
  ('Ana Torres', 'Inteligencia Artificial', 'Investigadora y docente en machine learning y redes neuronales. Doctora en Ciencias de la Computación por la Universidad de Costa Rica.', './images/profesor4.jpg', 'atorres@novatechacademy.cr', 'Inteligencia Artificial, Bases de Datos', 1);