<?php
include '../../model/LojaAdquirente.php';

class LojaAdquirenteControl{
	function insert($obj){
		$conteudo = new LojaAdquirente();
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new LojaAdquirente();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new LojaAdquirente();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new LojaAdquirente();
		return $conteudo->findAll();
	}
}

?>