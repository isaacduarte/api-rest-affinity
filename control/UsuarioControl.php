<?php
include '../../model/Usuario.php';

class UsuarioControl{
	function insert($obj){
		$conteudo = new Usuario();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Usuario();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Usuario();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Usuario();
		return $conteudo->findAll();
	}
}

?>