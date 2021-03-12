<?php
include '../../model/Dados.php';

class DadosControl{
	function insert($obj){
		$dados = new Dados();
		return $dados->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$dados = new Dados();
		return $dados->update($obj,$id);
	}

	function delete($obj,$id){
		$dados = new Dados();
		return $dados->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$dados = new Dados();
		return $dados->findAll();
	}
}

?>
