<?php
require_once "../Controlador/Dashboard/controlador_dashboard3_listar.php";
require_once "../Modelo/modelo_dashboard3.php";
Class AjaxProcesos{
    public function ListarCitasxAno(){
        $respuesta=controlador_dashboard3_listar::ctrListarCitasxAno();
        echo json_encode($respuesta);
    }
}
$procesos = new AjaxProcesos();
$procesos->ListarCitasxAno();
?>