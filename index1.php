<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'conexion.php';
		$sentencia = $bd->query("SELECT * FROM autodeclaraciones;");
		$autodeclaracion = $sentencia->fetchAll(PDO::FETCH_OBJ);
		$sentenciaautoevalucion = $bd->query("SELECT * FROM autoevaluacion;");
		$autoevaluacion = $sentenciaautoevalucion->fetchAll(PDO::FETCH_OBJ);
                $sentenciausuario = $bd->query("SELECT * FROM usuario;");
                $usuario = $sentenciausuario->fetchAll(PDO::FETCH_OBJ);
	}else{
		echo "Error en el sistema";
	}


	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
       
    <title>Página web Omar Jaramillo</title>
    
    <link rel="stylesheet" href="css/estilos.css">
    
        <link rel="shortcut icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
        
</head>
<body>
	<center>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                
            </div>
            
            
            <div class="titulo">
		<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
                </div>
            <br>
            <br>
		<a href="cerrar.php">Cerrar Sesión</a>
                <br>
            <br>
            <div class="descripcion">
		<h3>Lista de Autodeclaraciones</h3>
                <br>
                <br>
                <table>
			<tr>
				<td class="vinculo">ID</td>
                                <td class="vinculo">Año</td>
				<td class="vinculo">Periodo</td>
				<td class="vinculo">Entidad</td>
				<td class="vinculo">Tipo Entidad</td>
				<td class="vinculo">Autodeclaracion</td>
			</tr>

			<?php 
				foreach ($autodeclaracion as $dato) {
					?>
					<tr>
						<td><?php echo $dato->id; ?></td>
                                                <td><?php echo $dato->año; ?></td>
						<td><?php echo $dato->periodo; ?></td>
						<td><?php echo $dato->entidad; ?></td>
						<td><?php echo $dato->tipoentidad; ?></td>
						<td><?php echo $dato->autodeclaracion; ?></td>
                                                <td><a href="editarautodeclaracion.php?id=<?php echo $dato->id; ?>">Editar</a></td>
                                                <td><a href="eliminarautodeclaracion.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>
                <br>
                <br>
                <h3>Lista de Autoevaluaciones</h3>
                <br>
                <br>
                <table>
			<tr>
				<td>ID</td>
                                <td>Evaluador</td>
				<td>Añoperiodo</td>
				<td>Macroproceso</td>
				<td>Proceso</td>
				<td>Subproceso</td>
                                <td>Verificador</td>
				<td>TecnicasEvaluativas</td>
				<td>FuenteReferencial</td>
				<td>CriteriosPuntuacion</td>
				<td>Puntuacion</td>
                                <td>Observacion</td>
			</tr>
                        <br>
                        <br>
                        
			<?php 
				foreach ($autoevaluacion as $dato) {
					?>
					<tr>
						<td><?php echo $dato->id; ?></td>
                                                <td><?php echo $dato->evaluador; ?></td>
						<td><?php echo $dato->añoperiodo; ?></td>
						<td><?php echo $dato->macroproceso; ?></td>
						<td><?php echo $dato->proceso; ?></td>
						<td><?php echo $dato->subproceso; ?></td>
						<td><?php echo $dato->verificador; ?></td>
                                                <td><?php echo $dato->tecnicasevaluativas; ?></td>
						<td><?php echo $dato->fuentereferencial; ?></td>
						<td><?php echo $dato->criteriospuntuacion; ?></td>
                                                <td><?php echo $dato->puntuacion; ?></td>
						<td><?php echo $dato->observacion; ?></td>
						
                                                <td><a href="editarautoevaluacion.php?id=<?php echo $dato->id; ?>">Editar</a></td>
						<td><a href="eliminarautoevaluacion.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>
                <br>
                <br>
                <h3>Lista de Usuarios</h3>
                <br>
                <br>
                <table>
			<tr>
				
                                <td class="vinculo">Usuario;</td>
				<td class="vinculo">Contraseña</td>
				<td class="vinculo">Nombrecompleto</td>
				<td class="vinculo">Perfil</td>
				<td class="vinculo">Categoria</td>
                                <td class="vinculo">Codigoentidad</td>
				<td class="vinculo">Descripcionentidad</td>
				<td class="vinculo">Otros</td>
				
			</tr>
                        <br>
                        <br>
                        
			<?php 
				foreach ($usuario as $dato) {
					?>
					<tr>
						
                                                <td><?php echo $dato->usuario; ?></td>
						<td><?php echo $dato->contraseña; ?></td>
						<td><?php echo $dato->nombrecompleto; ?></td>
						<td><?php echo $dato->perfil; ?></td>
						<td><?php echo $dato->categoria; ?></td>
						<td><?php echo $dato->codigoentidad; ?></td>
                                                <td><?php echo $dato->descripcionentidad; ?></td>
						<td><?php echo $dato->otros; ?></td>
						
						
                                                <td><a href="editarusuario.php?id=<?php echo $dato->usuario; ?>">Editar</a></td>
                                                <td><a href="eliminarusuario.php?id=<?php echo $dato->usuario; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>
                
                
                
                </div>
                <br>
                <br>
		<!-- inicio insert -->
		
		
		
		<!-- fin insert-->
          <a href="index.php">Inicio</a>
	<br>
                <br>
        
        
        </center>
</body>
</html>