<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
        $idauto=$_POST['idauto'];
	$año = $_POST['añoseleccion'];
	$periodo = $_POST['semestreseleccion'];
	$entidad= $_POST['entidad'];
        $tipoentidad= $_POST['tipoentidad'];
        $autodeclaracion= $_POST['autodeclaracion'];

	$sentencia = $bd->prepare("UPDATE autodeclaraciones SET año=?, periodo = ?, entidad = ?, 
												tipoentidad = ?, autodeclaracion = ?  WHERE id = ?;");
	$resultado = $sentencia->execute([$año,$periodo,$entidad,$tipoentidad,$autodeclaracion,$idauto]);

	if ($resultado === TRUE) {
		header('Location: index1.php');
	}else{
		echo "Error";
	}
?>