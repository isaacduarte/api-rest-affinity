<?php
include '../../model/Cliente.php';

class ClienteControl{
	function insert($obj){
		$conteudo = new Cliente();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Cliente();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Cliente();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Cliente();
		return $conteudo->findAll();
	}
}

?>