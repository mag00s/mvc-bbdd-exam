# Sistema MVC para Consultas de Base de Datos

Este proyecto es una implementación de un sistema MVC (Modelo-Vista-Controlador) para realizar consultas sobre una base de datos de empleados y departamentos.

## Estructura del Proyecto

```
mvc-bbdd-exam/
├── index.php                  # Punto de entrada de la aplicación
├── models/
│   └── ModelBBDD.php         # Clase para conexión y consultas a la BD
├── controllers/
│   └── PreguntasController.php # Controlador para manejar las consultas
├── views/
│   ├── preguntas.php         # Vista principal con menú de consultas
│   └── respuesta.php         # Vista para mostrar resultados
└── assets/
    └── css/
        └── estilos.css       # Estilos de la aplicación
```

## Requisitos

- PHP 7.4 o superior
- MySQL/MariaDB
- Servidor web (Apache/Nginx)

## Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/TU_USUARIO/mvc-bbdd-exam.git
```

2. Importar la base de datos:
- Crear una base de datos llamada `empresa_db`
- Importar el archivo `database.sql`

3. Configurar la conexión:
- Abrir `models/ModelBBDD.php`
- Modificar las credenciales de la base de datos según tu entorno

## Uso

1. Acceder a la aplicación a través del navegador
2. Seleccionar una de las tres consultas disponibles:
   - Consulta 1: Muestra empleados del departamento IT
   - Consulta 2: Muestra estadísticas por departamento
   - Consulta 3: Muestra empleados con salario superior a 43.000€

## Estructura de la Base de Datos

### Tabla: departamentos
- id (PK)
- nombre
- ubicacion
- presupuesto

### Tabla: empleados
- id (PK)
- nombre
- apellido
- email
- salario
- fecha_contrato
- idDepartamento (FK)

## Autor

[Tu Nombre]

## Licencia

MIT