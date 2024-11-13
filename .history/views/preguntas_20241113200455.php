<?php
require_once "models/ModelBBDD.php";

class PreguntasController {
    private $model;

    public function __construct() {
        $this->model = new ModelBBDD();
    }

    public function consulta1() {
        try {
            // Definimos las variables que necesita la vista
            $action = 'consulta1'; // Importante para la vista
            $titulo = "Empleados del Departamento de IT";
            $descripcion = "Lista de empleados que trabajan en el departamento de IT con sus detalles";
            $results = $this->model->getEmpleadosPorDepartamento(1);
            
            if (empty($results)) {
                $mensaje = "No se encontraron empleados en el departamento de IT";
            }
            
            include "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener los empleados: " . $e->getMessage();
            include "views/error.php";
        }
    }

    public function consulta2() {
        try {
            // Definimos las variables que necesita la vista
            $action = 'consulta2'; // Importante para la vista
            $titulo = "Estadísticas por Departamento";
            $descripcion = "Resumen estadístico de empleados y salarios por departamento";
            $results = $this->model->getEstadisticasDepartamentos();
            
            if (empty($results)) {
                $mensaje = "No hay datos estadísticos disponibles";
            }
            
            include "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener las estadísticas: " . $e->getMessage();
            include "views/error.php";
        }
    }

    public function consulta3() {
        try {
            // Definimos las variables que necesita la vista
            $action = 'consulta3'; // Importante para la vista
            $titulo = "Empleados con Salario Alto";
            $descripcion = "Lista de empleados con salario superior a 43.000€";
            $results = $this->model->getEmpleadosSalarioAlto(43000);
            
            if (empty($results)) {
                $mensaje = "No se encontraron empleados con salario superior a 43.000€";
            }
            
            include "views/respuesta.php";
        } catch (Exception $e) {
            $error = "Error al obtener los salarios: " . $e->getMessage();
            include "views/error.php";
        }
    }
}