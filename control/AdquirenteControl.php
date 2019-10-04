<?php
include '../../model/Adquirente.php';

class AdquirenteControl{
	function insert($obj){
		$conteudo = new Adquirente();
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Adquirente();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Adquirente();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Adquirente();
		return $conteudo->findAll();
	}
}

?>