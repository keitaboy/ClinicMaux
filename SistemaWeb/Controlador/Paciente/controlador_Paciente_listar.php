<?php

// require '../../Modelo/modelo_paciente.php';
// $MP=new Modelo_Paciente();

// $consulta=$MP->listar_Paciente();
// if ($consulta) {
//     echo json_encode($consulta);
// }else{
//     echo'{
//         "sEcho":1,
//         "iTotalRecords":"0",
//         "iTotalDisplayRecords":"0",
//         "aaData":[]
//     }';
// }

require '../../Modelo/modelo_paciente.php';
$MD = new Modelo_Paciente();
//$NroDoc = htmlspecialchars($_POST['NroDoc'], ENT_QUOTES, 'UTF-8');
$NroDoc = htmlspecialchars($_POST['nroDoc'], ENT_QUOTES, 'UTF-8');
$consulta = $MD->listar_Paciente($NroDoc);

echo json_encode($consulta);