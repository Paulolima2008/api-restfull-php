<?php
include '../../control/DadosControl.php';
$dadosControl = new DadosControl();

header('Content-Type: application/json');

foreach($dadosControl->findAll() as $valor){
	echo json_encode($valor);
}


?>
