<?php  
	if (!isset($_POST['oculto'])) {
		exit();
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
        
	$sentencia = $bd->prepare("INSERT INTO autoevaluacion(id,evaluador,añoperiodo,macroproceso,proceso,subproceso,verificador,tecnicasevaluativas,fuentereferencial,criteriospuntuacion,puntuacion,observacion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$id,$evaluador,$añoperiodo,$macroproceso,$proceso,$subproceso,$verificador,$tecnicasevaluativas,$fuentereferencial,$criteriospuntuacion,$puntuacion,$observacion]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>