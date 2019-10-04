<?php
include '../../model/Loja.php';

class LojaControl{
	function insert($obj){
		$conteudo = new Loja();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Loja();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Loja();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Loja();
		return $conteudo->findAll();
	}
}

?>