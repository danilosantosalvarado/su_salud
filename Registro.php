

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
            
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                
            
            
            
            
		<h1>Bienvenido: </h1>
		
		<table>
			

			
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Bienvenido Usuario Registrate:</h3>
                <form method="POST" action="insertarregistro.php">
                    <div class="descripcion">
			<table class="tabla">
				
				
				<tr>
					<td>Nombre de Usuario: </td>
					<td><input type="text" name="txtUsuario"></td>
				</tr>
				<tr>
					<td>password: </td>
					<td><input type="text" name="txtPass"></td>
				</tr>
				<tr>
					<td>Nombre Completo: </td>
					<td><input type="text" name="txtNombreCompleto"></td>
				</tr>
                                <tr>
			        <td>      Perfil: </td>
					
                                <td><select name="perfil" id="SelectID">
                                    
                                            
                                    <option value="supervisor">Supervisor</option>
                                    <option value="Evaluador">Evaluador </option>
                                    <option value="jefe">jefe</option>
                                    <option value="superintendente">superintendente</option>
                                    
                                    </select></td>				
                               </tr>
                                <tr>
					<td>Categoria: </td>
					<td><input type="text" name="categoria"></td>
				</tr>
                                <tr>
					<td>Codigo Entidad: </td>
					<td><input type="text" name="codigoentidad"></td>
				</tr>
                                <tr>
					<td>Descripcion Entidad: </td>
					<td><input type="text" name="descripcionentidad"></td>
				</tr>
                                
                                <tr>
					<td>Otros: </td>
					<td><input type="text" name="otros"></td>
				</tr>
                                
                                
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="Registrarse"></td>
				</tr>
			</table>
                        </div>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>