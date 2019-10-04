<?php
include '../../control/UsuarioControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

if(!empty($data)){	
 $usuarioControl = new UsuarioControl();
 $usuarioControl->delete($obj,$id);
 header('Location:listar.php');
}


?>