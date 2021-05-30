<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
	
        $id=$_POST['id'];
	$evaluador = $_POST['evaluador'];
	$añoperiodo = $_POST['añoperiodo'];
	$macroproceso= $_POST['macroproceso'];
        $proceso= $_POST['proceso'];
        $subproceso= $_POST['subproceso'];
        $verificador= $_POST['verificador'];
        $tecnicasevaluativas= $_POST['tecnicasevaluativas'];
        $fuentereferencial= $_POST['fuentereferencial'];
        $criteriospuntuacion= $_POST['criteriospuntuacion'];
        $puntuacion= $_POST['puntuacion'];
        $observacion= $_POST['observacion'];
        

	$sentencia = $bd->prepare("UPDATE autoevaluacion SET  evaluador = ?, añoperiodo = ?, 
												macroproceso = ?, proceso = ? ,subproceso= ?,verificador = ?,tecnicasevaluativas= ?,fuentereferencial= ?,criteriospuntuacion = ?,puntuacion= ?,observacion = ?  WHERE id = ?;");
	$resultado = $sentencia->execute([$evaluador,$añoperiodo,$macroproceso,$proceso,$subproceso,$verificador,$tecnicasevaluativas,$fuentereferencial,$criteriospuntuacion,$puntuacion,$observacion,$id]);

	if ($resultado === TRUE) {
		header('Location: index1.php');
	}else{
		echo "Error";
	}
?>