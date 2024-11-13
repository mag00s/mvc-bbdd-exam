<?php
/**
 * Clase ModelBBDD
 * 
 * Esta clase maneja la conexión a la base de datos y las consultas necesarias
 * para obtener información sobre empleados y departamentos.
 */
class ModelBBDD {
    private $conn;
    private $host = "localhost";
    private $dbname = "empresa_db";
    private $username = "root";  // Cambiar según tu configuración
    private $password = "root";      // Cambiar según tu configuración

    /**
     * Constructor: establece la conexión con la base de datos
     */
    public function __construct() {
        try {
            // Crear conexión PDO
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname", 
                $this->username, 
                $this->password
            );
            // Configurar el modo de error y la codificación
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES utf8");
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    /**
     * Obtiene todos los empleados de un departamento específico
     * 
     * @param int $idDepartamento ID del departamento
     * @return array Lista de empleados con información del departamento
     */
    public function getEmpleadosPorDepartamento($idDepartamento) {
        $sql = "SELECT 
                    e.*, 
                    d.nombre as nombre_departamento 
                FROM empleados e 
                JOIN departamentos d ON e.idDepartamento = d.id 
                WHERE e.idDepartamento = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $idDepartamento]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Obtiene estadísticas de todos los departamentos
     * 
     * @return array Estadísticas por departamento
     */
    public function getEstadisticasDepartamentos() {
        $sql = "SELECT 
                    d.nombre as departamento,
                    COUNT(e.id) as num_empleados,
                    ROUND(AVG(e.salario), 2) as salario_promedio,
                    SUM(e.salario) as costo_total,
                    d.presupuesto as presupuesto_total
                FROM departamentos d
                LEFT JOIN empleados e ON d.id = e.idDepartamento
                GROUP BY d.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Obtiene empleados con salario superior al umbral especificado
     * 
     * @param float $threshold Salario mínimo a considerar
     * @return array Lista de empleados que superan el umbral
     */
    public function getEmpleadosSalarioAlto($threshold) {
        $sql = "SELECT 
                    e.nombre,
                    e.apellido,
                    e.salario,
                    d.nombre as nombre_departamento 
                FROM empleados e
                JOIN departamentos d ON e.idDepartamento = d.id
                WHERE e.salario > :threshold
                ORDER BY e.salario DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['threshold' => $threshold]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Destructor: cierra la conexión a la base de datos
     */
    public function __destruct() {
        $this->conn = null;
    }
}