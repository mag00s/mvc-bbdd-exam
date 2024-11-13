<?php
/**
 * Controlador de Preguntas
 * 
 * Este controlador maneja las tres consultas requeridas para el examen
 * y actúa como intermediario entre el modelo y las vistas.
 */
require_once "models/ModelBBDD.php";

class PreguntasController {
    private $model;

    /**
     * Constructor: inicializa el modelo de base de datos
     */
    public function __construct() {
        $this->model = new ModelBBDD();
    }

    /**
     * Consulta 1: Muestra los empleados del departamento de IT
     * Esta consulta ejemplifica la relación entre empleados y departamentos
     */
    public function consulta1() {
        try {
            $titulo = "Empleados del Departamento de IT";
            $descripcion = "Lista de empleados que trabajan en el departamento de IT con sus detalles";
            $results = $this->model->getEmpleadosPorDepartamento(1);
            
            // Verificar si hay resultados
            if (empty($results)) {
                $mensaje = "No se encontraron empleados en el departamento de IT";
            }
            
            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al ejecutar la consulta: " . $e->getMessage();
            require_once "views/error.php";
        }
    }

    /**
     * Consulta 2: Muestra estadísticas por departamento
     * Esta consulta genera un resumen estadístico de cada departamento
     */
    public function consulta2() {
        try {
            $titulo = "Estadísticas por Departamento";
            $descripcion = "Resumen estadístico de empleados y salarios por departamento";
            $results = $this->model->getEstadisticasDepartamentos();
            
            if (empty($results)) {
                $mensaje = "No hay datos estadísticos disponibles";
            }
            
            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener estadísticas: " . $e->getMessage();
            require_once "views/error.php";
        }
    }

    /**
     * Consulta 3: Muestra empleados con salario superior a 43.000€
     * Esta consulta demuestra el filtrado de datos según un criterio específico
     */
    public function consulta3() {
        try {
            $salarioMinimo = 43000;
            $titulo = "Empleados con Salario Superior a " . number_format($salarioMinimo, 2) . "€";
            $descripcion = "Lista de empleados que superan el umbral salarial establecido";
            $results = $this->model->getEmpleadosSalarioAlto($salarioMinimo);
            
            if (empty($results)) {
                $mensaje = "No se encontraron empleados con salario superior a " . number_format($salarioMinimo, 2) . "€";
            }
            
            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al buscar empleados: " . $e->getMessage();
            require_once "views/error.php";
        }
    }
}