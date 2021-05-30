<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM registroalumno WHERE id_alumno = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Alumno</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar alumno:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>id usuario: </td>
					<td><input type="text" name="txtid"></td>
				</tr>
				
				<tr>
					<td>Nombre de Usuario: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>password: </td>
					<td><input type="text" name="txtPass"></td>
				</tr>
				<tr>
					<td>Correo: </td>
					<td><input type="text" name="txtcorreo"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="Actualizar"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>