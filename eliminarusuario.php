<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include 'conexion.php';
	$sentencia = $bd->prepare("DELETE FROM usuario WHERE usuario = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: index1.php');
	}else{
		echo "Error";
	}

?>
