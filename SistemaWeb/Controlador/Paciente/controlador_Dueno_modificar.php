<?php

require '../../Modelo/modelo_paciente.php';
$MD=new Modelo_Paciente();
$idDueno = htmlspecialchars($_POST['idDueno'],ENT_QUOTES,'UTF-8');
$DuenoNombre = htmlspecialchars($_POST['DuenoNombre'],ENT_QUOTES,'UTF-8');
$DuenoApellido = htmlspecialchars($_POST['DuenoApellido'],ENT_QUOTES,'UTF-8');
$DuenoDocumento = htmlspecialchars($_POST['DuenoDocumento'],ENT_QUOTES,'UTF-8');
$DuenoNroDocActual = htmlspecialchars($_POST['DuenoNroDocActual'],ENT_QUOTES,'UTF-8');
$DuenoNroDocNuevo = htmlspecialchars($_POST['DuenoNroDocNuevo'],ENT_QUOTES,'UTF-8');
$DuenoCelular = htmlspecialchars($_POST['DuenoCelular'],ENT_QUOTES,'UTF-8');
$DuenoDireccion = htmlspecialchars($_POST['DuenoDireccion'],ENT_QUOTES,'UTF-8');
$DuenoCorreo = htmlspecialchars($_POST['DuenoCorreo'],ENT_QUOTES,'UTF-8');
$consulta = $MD->Modificar_Dueno($idDueno,$DuenoNombre,$DuenoApellido,$DuenoDocumento,
$DuenoNroDocActual,$DuenoNroDocNuevo,$DuenoCelular,$DuenoDireccion,$DuenoCorreo);
echo $consulta;