# Sistema MVC de Consultas de Empleados

Este proyecto implementa un sistema MVC (Modelo-Vista-Controlador) para realizar consultas sobre una base de datos de empleados y departamentos. Desarrollado como parte de un ejercicio práctico de programación.

## 🚀 Características

- Arquitectura MVC clara y modular
- Consultas predefinidas optimizadas
- Manejo de errores robusto
- Interfaz de usuario intuitiva
- Código documentado y mantenible

## 📋 Consultas Implementadas

1. **Empleados de IT**: Muestra todos los empleados del departamento de IT
2. **Estadísticas**: Presenta estadísticas por departamento incluyendo número de empleados y salarios
3. **Salarios Altos**: Lista empleados con salario superior a 43.000€

## 🛠️ Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/tu-usuario/mvc-bbdd-exam.git
```

2. Importa la base de datos:
```sql
source database.sql
```

3. Configura el acceso a la base de datos en `models/ModelBBDD.php`

4. Asegúrate de que tu servidor web apunta al directorio del proyecto

## 🔧 Requisitos

- PHP 8.1 o superior
- MySQL 5.7 o superior
- Servidor web (Apache/Nginx)
- PDO PHP Extension

## 📁 Estructura del Proyecto

```
mvc-bbdd-exam/
├── models/
│   └── ModelBBDD.php
├── controllers/
│   └── PreguntasController.php
├── views/
│   ├── preguntas.php
│   ├── respuesta.php
│   └── error.php
├── assets/
│   └── css/
│       └── estilos.css
└── index.php
```

## 🤝 Contribuir

1. Fork del repositorio
2. Crea una rama para tu funcionalidad (`git checkout -b feature/AmazingFeature`)
3. Commit de tus cambios (`git commit -m 'Add: nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📝 Licencia

Este proyecto está bajo la Licencia MIT - mira el archivo [LICENSE](LICENSE) para detalles

## ✨ Agradecimientos

- Gracias a los profesores y compañeros por el apoyo y feedback
- Inspirado en prácticas reales de desarrollo de software