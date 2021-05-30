<?php  
	 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
	
	$correo= $_POST['txtcorreo'];

	$sentencia = $bd->prepare("SELECT * FROM registroalumno WHERE Correo = ?;");
	$resultado = $sentencia->execute([$correo]);
        
        

	if ($resultado === TRUE) {
            
            $sentencias = $bd->query("SELECT * FROM registroalumno;");
		$alumnos = $sentencias->fetchAll(PDO::FETCH_OBJ);
		echo "Correcto";
	}else{
		echo "Error";
	}



	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
       
    <title>Página web Omar Jaramillo</title>
    
    <link rel="stylesheet" href="css/estilos.css">
    
        
        
</head>
<body>
	<center>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                
            </div>
            
            
            
		<h1>Bienvenido: </h1>
		<a href="cerrar.php">Cerrar Sesión</a>
		<h3>Lista de Alumnos</h3>
		<table>
			<tr>
				<td>ID Usuario</td>
				<td>Nombre Usuario</td>
				<td>Password</td>
				<td>Correo</td>
				
			</tr>

			<?php 
				foreach ($alumnos as $dato) {
                                    if  ($dato->Correo==$correo){
                                        
                                    
					?>
					<tr>
						<td><?php echo $dato->Id_usuario; ?></td>
						<td><?php echo $dato->nombre_usuario; ?></td>
						<td><?php echo $dato->password; ?></td>
						<td><?php echo $dato->Correo; ?></td>
						
						<td><a href="editar.php?id=<?php echo $dato->Id_usuario; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->Id_usuario; ?>">Eliminar</a></td>
					</tr>
					<?php
                                    }
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3></h3>
		<form method="POST" action="insertar.php">
			
		</form>
		<!-- fin insert-->
          <a href="index.php">Inicio</a>
	</center>
</body>
</html>