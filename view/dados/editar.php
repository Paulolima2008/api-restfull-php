<?php
include '../../control/DadosControl.php';

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;


if(!empty($data)){
 $dadosControl = new DadosControl();
 $dadosControl->update($obj , $id);
 header('Location:listar.php');
}







?>
