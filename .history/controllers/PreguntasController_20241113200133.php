<?php
require_once "models/ModelBBDD.php";

class PreguntasController {
    private $model;

    public function __construct() {
        $this->model = new ModelBBDD();
    }

    public function consulta1() {
        try {
            $action = 'consulta1';
            $titulo = "Empleados del Departamento IT";
            $descripcion = "Listado de empleados que trabajan en el departamento de IT";
            $results = $this->model->getEmpleadosPorDepartamento(1);
            
            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener los empleados: " . $e->getMessage();
            require_once "views/error.php";
        }
    }

    public function consulta2() {
        try {
            $action = 'consulta2';
            $titulo = "Estadísticas por Departamento";
            $descripcion = "Resumen estadístico de cada departamento incluyendo número de empleados, salarios y presupuesto";
            $results = $this->model->getEstadisticasDepartamentos();
            
            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener las estadísticas: " . $e->getMessage();
            require_once "views/error.php";
        }
    }

    public function consulta3() {
        try {
            $action = 'consulta3';
            $titulo = "Empleados con Salario Superior a 43.000€";
            $descripcion = "Listado de empleados que superan el salario base de 43.000€, ordenados por salario";
            $results = $this->model->getEmpleadosSalarioAlto(43000);
            
            require_once "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener los salarios: " . $e->getMessage();
            require_once "views/error.php";
        }
    }
}