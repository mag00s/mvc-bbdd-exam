<?php
// Punto de entrada de la aplicación
require_once "controllers/PreguntasController.php";

// Obtener la acción de la URL, si no hay acción, mostrar la página principal
$action = $_GET['action'] ?? null;

// Crear instancia del controlador
$controller = new PreguntasController();

// Ejecutar la acción correspondiente o mostrar la página principal
if ($action && method_exists($controller, $action)) {
    $controller->$action();
} else {
    // Si no hay acción, mostrar la página de preguntas
    require_once "views/preguntas.php";
}