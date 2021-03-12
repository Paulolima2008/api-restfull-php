<?php
include '../../control/DadosControl.php';

$data = file_get_contents('php://input');
$obj =  json_decode($data);

if(!empty($data)){

 $dadosControl = new DadosControl();
 $dadosControl->insert($obj);
 header('Location:listar.php');
}
?>
