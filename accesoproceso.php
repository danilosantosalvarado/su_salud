<?php 
	session_start();
	include_once 'conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$sentencia = $bd->prepare('select * from registroalumno where 
								nombre_usuario = ? and password = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: acceso.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombre_usuario;
		header('Location: cursos.php');
	}
?>