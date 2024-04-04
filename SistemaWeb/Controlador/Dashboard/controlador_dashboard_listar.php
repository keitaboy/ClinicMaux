<?php

Class controlador_dashboard_listar{
    static public function ctrListarServiciosMasUsados(){
        $respuesta=modelo_dashboard::mdlListarServiciosMasUsados();
        return $respuesta;
    }

    static public function ctrListarServiciosMasUsadosAno(){
        $respuesta=modelo_dashboard::mdlListarServiciosMasUsadosAno();
        return $respuesta;
    }
}