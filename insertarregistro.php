<?php  
	if (!isset($_POST['oculto'])) {
		exit();
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
        
	$sentencia = $bd->prepare("INSERT INTO usuario(usuario,contraseña,nombrecompleto,perfil,categoria,codigoentidad,descripcionentidad,otros) VALUES (?,?,?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$nombre,$pass,$nombrec,$perfil,$categoria,$codigoentidad,$descripcionentidad,$otros]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>