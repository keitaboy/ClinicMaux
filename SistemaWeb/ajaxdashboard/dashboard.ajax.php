<?php
require_once "../Controlador/Dashboard/controlador_dashboard_listar.php";
require_once "../Modelo/modelo_dashboard.php";
Class AjaxProcesos{
    public function ListarServiciosMasUsados(){
        $respuesta=controlador_dashboard_listar::ctrListarServiciosMasUsados();
        echo json_encode($respuesta);
    }
}
$procesos = new AjaxProcesos();
$procesos->ListarServiciosMasUsados();
?>