<?php
include '../../conexao/Conexao.php';

class Dados extends Conexao{
		private $base64;
    private $data;
    private $hora;
		
		//gets e setter
		//--------------------------------------------------------------
    public function getBase64(){
        return $this->base64;
    }
    public function setBase64($base64){
        $this->base64 = $base64;
        return $this;
    }

    public function getData(){
        return $this->data;
    }
    public function setData($data){
        $this->data = $data;
        return $this;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora){
        $this->hora = $hora;
        return $this;
    }
		//---------------------------------------------------------------
    public function insert($obj){
    	$sql = "INSERT INTO dados(base64,data,hora) VALUES (:base64,:data,:hora)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('base64',  $obj->base64);
        $consulta->bindValue('data', $obj->data);
        $consulta->bindValue('hora' , $obj->hora);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE dados SET base64 = :base64, data = :data, hora = :hora WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('base64', $obj->base64);
		$consulta->bindValue('data', $obj->data);
		$consulta->bindValue('hora' , $obj->hora);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM dados WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM dados";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

} // fim da classe

?>
