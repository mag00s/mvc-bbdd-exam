<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Consultas</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1>Sistema de Consultas de Empleados</h1>
            <p class="descripcion">Seleccione una consulta para ver los resultados</p>
        </header>

        <main class="consultas-menu">
            <h2>Consultas Disponibles:</h2>
            <ul>
                <li>
                    <a href="index.php?action=consulta1">
                        Consulta 1: Empleados del Departamento IT
                    </a>
                </li>
                <li>
                    <a href="index.php?action=consulta2">
                        Consulta 2: Estadísticas por Departamento
                    </a>
                </li>
                <li>
                    <a href="index.php?action=consulta3">
                        Consulta 3: Empleados con Salario Alto
                    </a>
                </li>
            </ul>
        </main>

        <footer class="main-footer">
            <p>&copy; <?php echo date('Y'); ?> - Sistema MVC de Consultas</p>
        </footer>
    </div>
</body>
</html>