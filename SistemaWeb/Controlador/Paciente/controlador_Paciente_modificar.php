<?php

require '../../Modelo/modelo_paciente.php';
$MD=new Modelo_Paciente();
$idPaciente = htmlspecialchars($_POST['idPaciente'],ENT_QUOTES,'UTF-8');
$PacienteNombre = htmlspecialchars($_POST['PacienteNombre'],ENT_QUOTES,'UTF-8');
$PacienteTipoMas = htmlspecialchars($_POST['PacienteTipoMas'],ENT_QUOTES,'UTF-8');
$PacienteRaza = htmlspecialchars($_POST['PacienteRaza'],ENT_QUOTES,'UTF-8');
$PacienteColor = htmlspecialchars($_POST['PacienteColor'],ENT_QUOTES,'UTF-8');
$PacientePeso = htmlspecialchars($_POST['PacientePeso'],ENT_QUOTES,'UTF-8');
$PacienteAltura = htmlspecialchars($_POST['PacienteAltura'],ENT_QUOTES,'UTF-8');
$PacienteEdad = htmlspecialchars($_POST['PacienteEdad'],ENT_QUOTES,'UTF-8');
$PacienteFechaNac = htmlspecialchars($_POST['PacienteFechaNac'],ENT_QUOTES,'UTF-8');
$PacienteSexo = htmlspecialchars($_POST['PacienteSexo'],ENT_QUOTES,'UTF-8');
$PacienteEsterilizar = htmlspecialchars($_POST['PacienteEsterilizar'],ENT_QUOTES,'UTF-8');
$consulta = $MD->Modificar_Paciente($idPaciente,$PacienteNombre,$PacienteTipoMas,$PacienteRaza,
$PacienteColor,$PacientePeso,$PacienteAltura,$PacienteEdad,$PacienteFechaNac,$PacienteSexo,$PacienteEsterilizar);
echo $consulta;

