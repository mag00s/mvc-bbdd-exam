<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?> - Sistema de Consultas</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1><?php echo $titulo; ?></h1>
            <?php if (isset($descripcion)): ?>
                <p class="descripcion"><?php echo $descripcion; ?></p>
            <?php endif; ?>
        </header>

        <main class="results-section">
            <?php if (isset($mensaje)): ?>
                <div class="message"><?php echo $mensaje; ?></div>
            <?php elseif (!empty($results)): ?>
                <?php if ($action === 'consulta1'): ?>
                    <!-- Vista para Empleados de IT -->
                    <table class="results-table">
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
                                <td><?php echo $empleado['nombre']; ?></td>
                                <td><?php echo $empleado['apellido']; ?></td>
                                <td><?php echo $empleado['email']; ?></td>
                                <td class="salary"><?php echo number_format($empleado['salario'], 2); ?>€</td>
                                <td><?php echo date('d/m/Y', strtotime($empleado['fecha_contrato'])); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                <?php elseif ($action === 'consulta2'): ?>
                    <!-- Vista para Estadísticas -->
                    <div class="stats-container">
                        <table class="results-table stats-table">
                            <thead>
                                <tr>
                                    <th>Departamento</th>
                                    <th>Nº Empleados</th>
                                    <th>Salario Promedio</th>
                                    <th>Costo Total</th>
                                    <th>Presupuesto</th>
                                    <th>% Utilizado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $stat): ?>
                                <tr>
                                    <td><?php echo $stat['departamento']; ?></td>
                                    <td class="text-center"><?php echo $stat['num_empleados']; ?></td>
                                    <td class="salary"><?php echo number_format($stat['salario_promedio'], 2); ?>€</td>
                                    <td class="salary"><?php echo number_format($stat['costo_total'], 2); ?>€</td>
                                    <td class="salary"><?php echo number_format($stat['presupuesto_total'], 2); ?>€</td>
                                    <td class="percentage <?php echo ($stat['costo_total'] / $stat['presupuesto_total'] > 0.8 ? 'warning' : ''); ?>">
                                        <?php echo number_format(($stat['costo_total'] / $stat['presupuesto_total'] * 100), 1); ?>%
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php elseif ($action === 'consulta3'): ?>
                    <!-- Vista para Salarios Altos -->
                    <table class="results-table salary-table">
                        <thead>
                            <tr>
                                <th>Empleado</th>
                                <th>Departamento</th>
                                <th>Salario</th>
                                <th>% Sobre Base</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $empleado): ?>
                            <tr>
                                <td><?php echo $empleado['nombre'] . ' ' . $empleado['apellido']; ?></td>
                                <td><?php echo $empleado['nombre_departamento']; ?></td>
                                <td class="salary"><?php echo number_format($empleado['salario'], 2); ?>€</td>
                                <td class="percentage">
                                    <?php echo number_format(($empleado['salario'] / 43000 * 100) - 100, 1); ?>%
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
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