<?php
require_once "modelo_dashboard_conexion.php";

class modelo_dashboard2
{   
    static public function mdlListarPacientesxAno()
    {
        // Establecer la conexión a la base de datos
        $conn = conexion::conectar();

        // Preparar la consulta utilizando un procedimiento almacenado
        $stmt = $conn->prepare("CALL SP_PACIENTES_ANO()");

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener los resultados de la consulta
        $resultados = $stmt->fetchAll();

        // Cerrar la conexión y liberar los recursos
        $stmt = null;
        $conn = null;

        // Devolver los resultados
        return $resultados;
    }
    static public function mdlListarPacientesxMes()
    {
        // Establecer la conexión a la base de datos
        $conn = conexion::conectar();

        // Preparar la consulta utilizando un procedimiento almacenado
        $stmt = $conn->prepare("CALL SP_PACIENTES_MES()");

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener los resultados de la consulta
        $resultados = $stmt->fetchAll();

        // Cerrar la conexión y liberar los recursos
        $stmt = null;
        $conn = null;

        // Devolver los resultados
        return $resultados;
    }

    static public function mdlListarPacientesxDia()
    {
        // Establecer la conexión a la base de datos
        $conn = conexion::conectar();

        // Preparar la consulta utilizando un procedimiento almacenado
        $stmt = $conn->prepare("CALL SP_PACIENTES_DIAMES()");

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener los resultados de la consulta
        $resultados = $stmt->fetchAll();

        // Cerrar la conexión y liberar los recursos
        $stmt = null;
        $conn = null;

        // Devolver los resultados
        return $resultados;
    }
}
?>
