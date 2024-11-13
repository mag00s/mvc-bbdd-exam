<?php
/**
 * Script de verificación del sistema
 * Comprueba que todo esté correctamente configurado
 */

echo "=== Verificación del Sistema ===\n\n";

// 1. Verificar versión de PHP
echo "✓ Versión PHP: " . PHP_VERSION . "\n";

// 2. Verificar extensiones necesarias
echo "\n✓ Extensiones PHP:\n";
$extensiones = ['pdo', 'pdo_mysql'];
foreach ($extensiones as $ext) {
    echo "  - $ext: " . (extension_loaded($ext) ? "OK" : "NO INSTALADA") . "\n";
}

// 3. Verificar estructura de directorios
echo "\n✓ Estructura de directorios:\n";
$directorios = [
    'models',
    'controllers',
    'views',
    'assets',
    'assets/css'
];

foreach ($directorios as $dir) {
    echo "  - $dir: " . (is_dir($dir) ? "OK" : "NO ENCONTRADO") . "\n";
}

// 4. Verificar archivos principales
echo "\n✓ Archivos principales:\n";
$archivos = [
    'index.php',
    'models/ModelBBDD.php',
    'controllers/PreguntasController.php',
    'views/preguntas.php',
    'views/respuesta.php'
];

foreach ($archivos as $archivo) {
    echo "  - $archivo: " . (file_exists($archivo) ? "OK" : "NO ENCONTRADO") . "\n";
}

// 5. Intentar conexión a la base de datos
echo "\n✓ Conexión a la base de datos:\n";
try {
    $host = "localhost";
    $dbname = "empresa_db";
    $username = "root";  // Cambia esto según tu configuración
    $password = "root";      // Cambia esto según tu configuración

    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "  - Conexión: OK\n";

    // Verificar tablas
    $tablas = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    echo "  - Tablas encontradas: " . implode(", ", $tablas) . "\n";

} catch (PDOException $e) {
    echo "  - ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== Fin de la verificación ===\n";