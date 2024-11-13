<?php
require_once "models/ModelBBDD.php";

echo "=== Prueba de Consultas ===\n\n";

try {
    $model = new ModelBBDD();
    
    // Prueba 1: Empleados de IT
    echo "1. Empleados del departamento IT:\n";
    $empleadosIT = $model->getEmpleadosPorDepartamento(1);
    foreach ($empleadosIT as $empleado) {
        echo "- {$empleado['nombre']} {$empleado['apellido']}: {$empleado['salario']}€\n";
    }
    
    echo "\n2. Estadísticas de departamentos:\n";
    $stats = $model->getEstadisticasDepartamentos();
    foreach ($stats as $stat) {
        echo "- {$stat['departamento']}: {$stat['num_empleados']} empleados, ";
        echo "promedio: {$stat['salario_promedio']}€\n";
    }
    
    echo "\n3. Empleados con salario alto:\n";
    $salarioAlto = $model->getEmpleadosSalarioAlto(43000);
    foreach ($salarioAlto as $empleado) {
        echo "- {$empleado['nombre']} {$empleado['apellido']}: {$empleado['salario']}€\n";
    }

} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== Fin de las pruebas ===\n";