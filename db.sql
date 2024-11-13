-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS escuela;

-- Usar la base de datos
USE escuela;

-- Crear la tabla de estudiantes
CREATE TABLE IF NOT EXISTS estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido_m VARCHAR(50) NOT NULL,
    apellido_p VARCHAR(50) NOT NULL,
    escuela_procedencia VARCHAR(100) NOT NULL,
    promedio DECIMAL(5,2) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    correo VARCHAR(100) NOT NULL
);