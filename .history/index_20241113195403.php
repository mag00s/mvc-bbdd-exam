<?php
// Activar el reporte de errores para debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir el controlador
require_once "controllers/PreguntasController.php";

try {
    // Crear instancia del controlador
    $controller = new PreguntasController();
    
    // Obtener la acción de la URL
    $action = $_GET['action'] ?? null;
    
    // Ejecutar la acción correspondiente o mostrar la página principal
    if ($action && method_exists($controller, $action)) {
        $controller->$action();
    } else {
        // Si no hay acción, mostrar la página de preguntas
        require_once "views/preguntas.php";
    }
} catch (Exception $e) {
    // En caso de error, mostrar página de error
    $error = $e->getMessage();
    require_once "views/error.php";
}