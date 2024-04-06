<?php

Class controlador_dashboard3_listar{
    static public function ctrListarCitasxAno(){
        $respuesta=modelo_dashboard3::mdlListarCitasxAno();
        return $respuesta;
    }
}
?>