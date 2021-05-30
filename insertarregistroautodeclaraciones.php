<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'conexion.php';
	
	$idauto=$_POST['idauto'];
	$año = $_POST['añoseleccion'];
	$periodo = $_POST['semestreseleccion'];
	$entidad= $_POST['entidad'];
        $tipoentidad= $_POST['tipoentidad'];
        $autodeclaracion= $_POST['autodeclaracion'];
        
        
	$sentencia = $bd->prepare("INSERT INTO autodeclaraciones(id,año,periodo,entidad,tipoentidad,autodeclaracion) VALUES (?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$idauto,$año,$periodo,$entidad,$tipoentidad,$autodeclaracion]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>