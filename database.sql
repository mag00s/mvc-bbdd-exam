-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS empresa_db;
USE empresa_db;

-- Tabla de departamentos
-- Almacena la información básica de cada departamento
CREATE TABLE departamentos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL COMMENT 'Nombre del departamento',
    ubicacion VARCHAR(100) COMMENT 'Ubicación física del departamento',
    presupuesto DECIMAL(10,2) COMMENT 'Presupuesto anual del departamento'
);

-- Tabla de empleados
-- Almacena la información de los empleados y su relación con los departamentos
CREATE TABLE empleados (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL COMMENT 'Nombre del empleado',
    apellido VARCHAR(100) NOT NULL COMMENT 'Apellido del empleado',
    email VARCHAR(100) COMMENT 'Correo electrónico del empleado',
    salario DECIMAL(10,2) COMMENT 'Salario anual del empleado',
    fecha_contrato DATE COMMENT 'Fecha de contratación',
    idDepartamento INT COMMENT 'ID del departamento al que pertenece',
    FOREIGN KEY (idDepartamento) REFERENCES departamentos(id)
);

-- Datos de ejemplo para departamentos
INSERT INTO departamentos (nombre, ubicacion, presupuesto) VALUES
('IT', 'Planta 3', 500000.00),
('Marketing', 'Planta 2', 300000.00),
('Recursos Humanos', 'Planta 1', 250000.00),
('Ventas', 'Planta 2', 400000.00);

-- Datos de ejemplo para empleados
INSERT INTO empleados (nombre, apellido, email, salario, fecha_contrato, idDepartamento) VALUES
('Juan', 'García', 'juan.garcia@empresa.com', 45000.00, '2022-01-15', 1),
('Ana', 'Martínez', 'ana.martinez@empresa.com', 38000.00, '2022-03-20', 2),
('Carlos', 'López', 'carlos.lopez@empresa.com', 42000.00, '2021-11-10', 1),
('María', 'Sánchez', 'maria.sanchez@empresa.com', 51000.00, '2021-08-05', 3),
('Pedro', 'Rodríguez', 'pedro.rodriguez@empresa.com', 39000.00, '2022-06-01', 4),
('Laura', 'Fernández', 'laura.fernandez@empresa.com', 44000.00, '2021-12-15', 2),
('Miguel', 'Torres', 'miguel.torres@empresa.com', 47000.00, '2022-02-28', 1),
('Carmen', 'Ruiz', 'carmen.ruiz@empresa.com', 41000.00, '2022-04-10', 4);
