<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Sistema de Consultas'; ?></title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1><?php echo $titulo ?? 'Consulta'; ?></h1>
            <?php if (isset($descripcion)): ?>
                <p class="descripcion"><?php echo $descripcion; ?></p>
            <?php endif; ?>
        </header>

        <main class="results-section">
            <?php if (isset($mensaje)): ?>
                <div class="message"><?php echo $mensaje; ?></div>
            <?php elseif (!empty($results)): ?>
                <table class="results-table">
                    <?php if ($action === 'consulta1'): ?>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Salario</th>
                                <th>Fecha Contrato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $empleado): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($empleado['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($empleado['apellido']); ?></td>
                                    <td><?php echo htmlspecialchars($empleado['email']); ?></td>
                                    <td class="salary"><?php echo number_format($empleado['salario'], 2); ?>€</td>
                                    <td><?php echo date('d/m/Y', strtotime($empleado['fecha_contrato'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    <?php elseif ($action === 'consulta2'): ?>
                        <thead>
                            <tr>
                                <th>Departamento</th>
                                <th>Nº Empleados</th>
                                <th>Salario Promedio</th>
                                <th>Costo Total</th>
                                <th>Presupuesto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $stat): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($stat['departamento']); ?></td>
                                    <td class="text-center"><?php echo $stat['num_empleados']; ?></td>
                                    <td class="salary"><?php echo number_format($stat['salario_promedio'], 2); ?>€</td>
                                    <td class="salary"><?php echo number_format($stat['costo_total'], 2); ?>€</td>
                                    <td class="salary"><?php echo number_format($stat['presupuesto_total'], 2); ?>€</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    <?php elseif ($action === 'consulta3'): ?>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Departamento</th>
                                <th>Salario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $empleado): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($empleado['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($empleado['apellido']); ?></td>
                                    <td><?php echo htmlspecialchars($empleado['nombre_departamento']); ?></td>
                                    <td class="salary"><?php echo number_format($empleado['salario'], 2); ?>€</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php endif; ?>
                </table>
            <?php endif; ?>

            <div class="back-link">
                <a href="index.php">Volver a las consultas</a>
            </div>
        </main>

        <footer class="main-footer">
            <p>&copy; <?php echo date('Y'); ?> - Sistema MVC de Consultas</p>
        </footer>
    </div>
</body>
</html>