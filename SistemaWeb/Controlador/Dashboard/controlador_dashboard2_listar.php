<?php

Class controlador_dashboard2_listar{
    static public function ctrListarPacientesxMes(){
        $respuesta=modelo_dashboard2::mdlListarPacientesxMes();
        return $respuesta;
    }
}
?>