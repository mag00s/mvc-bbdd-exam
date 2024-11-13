# Lista de Verificación para Pruebas Manuales

## 1. Configuración Inicial
- [ ] Base de datos creada correctamente
- [ ] Archivo de configuración con credenciales correctas
- [ ] Permisos de archivos y carpetas correctos
- [ ] Servidor web configurado y funcionando

## 2. Pruebas de Interfaz
- [ ] La página principal carga correctamente
- [ ] Los enlaces a las consultas funcionan
- [ ] El diseño es responsive
- [ ] Los estilos CSS se cargan correctamente

## 3. Pruebas de Consultas
### Consulta 1: Empleados de IT
- [ ] Muestra todos los empleados del departamento IT
- [ ] Los datos son correctos y completos
- [ ] El formato de la tabla es correcto
- [ ] La navegación de vuelta funciona

### Consulta 2: Estadísticas
- [ ] Muestra estadísticas de todos los departamentos
- [ ] Los cálculos son correctos
- [ ] Los totales cuadran
- [ ] El formato de números es correcto

### Consulta 3: Salarios Altos
- [ ] Muestra empleados con salario > 43.000€
- [ ] Los datos están ordenados correctamente
- [ ] El formato de salario es correcto
- [ ] No muestra empleados por debajo del umbral

## 4. Pruebas de Errores
- [ ] Error de conexión muestra mensaje apropiado
- [ ] Consulta inválida muestra error amigable
- [ ] URL incorrecta muestra página 404
- [ ] Los errores no muestran información sensible

## 5. Seguridad Básica
- [ ] No hay SQL injection posible
- [ ] No se muestran errores de PHP
- [ ] Los datos sensibles están protegidos
- [ ] Las consultas están parametrizadas

## 6. Rendimiento
- [ ] Las consultas responden rápidamente
- [ ] La página carga en menos de 2 segundos
- [ ] No hay errores en la consola del navegador
- [ ] Las imágenes y recursos cargan correctamente

## Pasos para reportar un error:
1. Descripción del error
2. Pasos para reproducirlo
3. Comportamiento esperado
4. Comportamiento actual
5. Capturas de pantalla (si aplica)
6. Entorno (navegador, versión de PHP, etc.)