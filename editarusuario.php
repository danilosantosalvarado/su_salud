<!DOCTYPE html>
<html>
<head>
	<title>Editar Alumno</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar Usuario:</h3>
		<<form method="POST" action="editarusuarioproceso.php">
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
	</center>
</body>
</html>