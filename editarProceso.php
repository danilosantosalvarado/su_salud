<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
	$idusuario = $_POST['txtid'];
	$nombre = $_POST['txtNombre'];
	$pass = $_POST['txtPass'];
	$correo= $_POST['txtcorreo'];

	$sentencia = $bd->prepare("UPDATE registroalumno SET id_usuario=?, nombre_usuario = ?, password = ?, 
												Correo = ?  WHERE id_usuario = ?;");
	$resultado = $sentencia->execute([$idusuario,$nombre,$pass,$correo,$idusuario]);

	if ($resultado === TRUE) {
		header('Location: index1.php');
	}else{
		echo "Error";
	}
?>