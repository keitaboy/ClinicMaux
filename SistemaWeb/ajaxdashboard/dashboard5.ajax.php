<?php
require_once "../Controlador/Dashboard/controlador_dashboard2_listar.php";
require_once "../Modelo/modelo_dashboard2.php";
Class AjaxProcesos{
    public function ListarPacientesxAno(){
        $respuesta=controlador_dashboard2_listar::ctrListarPacientesxAno();
        echo json_encode($respuesta);
    }
}
$procesos = new AjaxProcesos();
$procesos->ListarPacientesxAno();
?>