<?php
require_once "modelo_dashboard_conexion.php";

class modelo_dashboard
{
    static public function mdlListarServiciosMasUsados()
    {
        // Establecer la conexión a la base de datos
        $conn = conexion::conectar();

        // Preparar la consulta utilizando un procedimiento almacenado
        $stmt = $conn->prepare("CALL SP_LISTAR_SERVICIOS_USADOS_MES()");

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

    static public function mdlListarServiciosMasUsadosAno()
    {
        // Establecer la conexión a la base de datos
        $conn = conexion::conectar();

        // Preparar la consulta utilizando un procedimiento almacenado
        $stmt = $conn->prepare("CALL SP_LISTAR_SERVICIOS_USADOS_ANO()");

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

    static public function mdlListarServiciosMasUsadosDia()
    {
        // Establecer la conexión a la base de datos
        $conn = conexion::conectar();

        // Preparar la consulta utilizando un procedimiento almacenado
        $stmt = $conn->prepare("CALL SP_LISTAR_SERVICIOS_USADOS_DIA()");

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
