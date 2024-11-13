<?php
/**
 * Controlador de Preguntas
 * 
 * Este controlador maneja las consultas específicas requeridas para el sistema MVC.
 * Se encarga de la lógica de negocio y la comunicación entre el modelo y las vistas.
 */
require_once "models/ModelBBDD.php";

class PreguntasController {
    private $model;
    private const SALARIO_MINIMO = 43000;

    public function __construct() {
        $this->model = new ModelBBDD();
    }

    /**
     * Consulta 1: Muestra los empleados del departamento IT
     * 
     * @return void
     */
    public function consulta1(): void {
        try {
            $titulo = "Empleados del Departamento IT";
            $descripcion = "Lista de empleados que trabajan en el departamento IT";
            $results = $this->model->getEmpleadosPorDepartamento(1);

            if (empty($results)) {
                $mensaje = "No se encontraron empleados en el departamento IT";
            }

            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener empleados: " . $e->getMessage();
            require_once "views/error.php";
        }
    }

    /**
     * Consulta 2: Muestra estadísticas por departamento
     * 
     * @return void
     */
    public function consulta2(): void {
        try {
            $titulo = "Estadísticas por Departamento";
            $descripcion = "Resumen estadístico de cada departamento";
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
     * 
     * Esta consulta demuestra el filtrado de datos según un criterio específico
     * 
     * @return void
     */
    public function consulta3(): void {
        try {
            $salarioMinimo = self::SALARIO_MINIMO;
            $titulo = "Empleados con Salario Superior a " . number_format($salarioMinimo, 2) . "€";
            $descripcion = "Lista de empleados que superan el umbral salarial establecido";
            $results = $this->model->getEmpleadosSalarioAlto(threshold: $salarioMinimo);

            if (empty($results)) {
                $mensaje = "No se encontraron empleados con salario superior a " . 
                          number_format($salarioMinimo, 2) . "€";
            }

            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al buscar empleados: " . $e->getMessage();
            require_once "views/error.php";
        }
    }
}