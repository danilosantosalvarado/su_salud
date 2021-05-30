

<!DOCTYPE html>
<html>
<head>
	<title>Editar Alumno</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar Autodeclaracion:</h3>
		<form method="POST" action="editarprocesoautodeclaraciones.php">
                    <div class="descripcion">
			<table class="tabla">
				<tr>
					<td>ID: </td>
					<td><input type="text" name="idauto"></td>
				</tr>
				
				<tr>
			        <td>Año: </td>
					
                                <td><select name="añoseleccion" id="SelectID">
                                    
                                            
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    
                                    </select></td>				
                               </tr>
				<tr>
			        <td>Periodo: </td>
					
                                <td><select name="semestreseleccion" id="SelectID">
                                    
                                            
                                    <option value="primersemestre">Primer Semestre</option>
                                    <option value="segundosemestre">Segundo Semestre</option>
                                    
                                    
                                    </select></td>				
                               </tr>
				<tr>
			        <td>Entidad: </td>
					
                                <td><select name="entidad" id="SelectID">
                                    
                                            
                                    <option value="Entidad1">Entidad 1</option>
                                    <option value="Entidad2">Entidad 2</option>
                                    <option value="Entidad3">Entidad 3</option>
                                    <option value="Entidad4">Entidad 4</option>
                                    <option value="Entidad5">Entidad 5</option>
                                    <option value="Entidad6">Entidad 6</option>
                                    <option value="Entidad7">Entidad 7</option>
                                    <option value="Entidad8">Entidad 8</option>
                                    </select></td>				
                               </tr>
                                <tr>
			        <td>Tipo Entidad: </td>
					
                                <td><select name="tipoentidad" id="SelectID">
                                    
                                            
                                    <option value="TipoEntidad1">Tipo Entidad 1</option>
                                    <option value="TipoEntidad2">Tipo Entidad 2</option>
                                    <option value="TipoEntidad3">Tipo Entidad 3</option>
                                    <option value="TipoEntidad4">Tipo Entidad 4</option>
                                    <option value="TipoEntidad5">Tipo Entidad 5</option>
                                    <option value="TipoEntidad6">Tipo Entidad 6</option>
                                    <option value="TipoEntidad7">Tipo Entidad 7</option>
                                    <option value="TipoEntidad8">Tipo Entidad 8</option>
                                    </select></td>				
                               </tr>
                                <tr>
					<td>Autodeclaracion: </td>
					<td><input type="text" name="autodeclaracion"></td>
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