<?php
include '../../control/UsuarioControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);


if(!empty($data)){	
 $usuarioControl = new UsuarioControl();
 $usuarioControl->insert($obj);
 header('Location:listar.php');
}


?>