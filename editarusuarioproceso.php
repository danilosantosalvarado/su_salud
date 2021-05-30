<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
	$nombre = $_POST['txtUsuario'];
	$pass = $_POST['txtPass'];
	$nombrec= $_POST['txtNombreCompleto'];
        $perfil= $_POST['perfil'];
        $categoria= $_POST['categoria'];
        $codigoentidad= $_POST['codigoentidad'];
        $descripcionentidad= $_POST['descripcionentidad'];
        $otros= $_POST['otros'];

	$sentencia = $bd->prepare("UPDATE usuario SET contraseña=?, nombrecompleto = ?,perfil = ?, categoria = ?, 
												    codigoentidad = ?, descripcionentidad =?, otros = ?  WHERE usuario = ?;");
	$resultado = $sentencia->execute([$pass,$nombrec,$perfil,$categoria,$codigoentidad,$descripcionentidad,$otros,$nombre]);

	if ($resultado === TRUE) {
		header('Location: index1.php');
	}else{
		echo "Error";
	}
?>