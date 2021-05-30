<?php 
	session_start();
	include_once 'conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$sentencia = $bd->prepare('select * from usuario where 
								usuario = ? and contraseña = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		echo "Bienvenido";
                $_SESSION['nombre'] = $datos->usuario;
		header('Location: index1.php');
	}
?>