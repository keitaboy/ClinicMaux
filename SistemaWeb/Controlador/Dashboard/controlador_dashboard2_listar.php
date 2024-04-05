<?php

Class controlador_dashboard2_listar{
    static public function ctrListarPacientesxAno(){
        $respuesta=modelo_dashboard2::mdlListarPacientesxAno();
        return $respuesta;
    }
    static public function ctrListarPacientesxMes(){
        $respuesta=modelo_dashboard2::mdlListarPacientesxMes();
        return $respuesta;
    }
    static public function ctrListarPacientesxDia(){
        $respuesta=modelo_dashboard2::mdlListarPacientesxDia();
        return $respuesta;
    }
}
?>