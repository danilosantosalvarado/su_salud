
<!DOCTYPE html>
<html>
<head>
	<title>Editar Autoevaluacion</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar AutoEvaluacion:</h3>
                <form method="POST" action="editarprocesoautoevaluacion.php">
                    <div class="descripcion">
			<table class="tabla">
				<tr>
					<td>ID: </td>
					<td><input type="text" name="id"></td>
				</tr>
				
				<tr>
			        <td>Evaluador: </td>
					
                                <td><select name="evaluador" id="SelectID">
                                    
                                            
                                    <option value="Evaluador1">Evaluador 1</option>
                                    <option value="Evaluador2">Evaluador 2</option>
                                    <option value="Evaluador3">Evaluador 3</option>
                                    <option value="Evaluador4">Evaluador 4</option>
                                    
                                    </select></td>				
                               </tr>
				<tr>
			        <td>Año Periodo: </td>
					
                                <td><select name="añoperiodo" id="SelectID">
                                    
                                            
                                    <option value="2017 primer periodo">2017 primer periodo</option>
                                    <option value="2017 segundo periodo">2017 segundo periodo</option>
                                    <option value="2018 primer periodo">2018 primer periodo</option>
                                    <option value="2018 segundo periodo">2018 segundo periodo</option>
                                    <option value="2019 primer periodo">2019 primer periodo</option>
                                    <option value="2019 segundo periodo">2019 segundo periodo</option>
                                    <option value="2020 primer periodo">2020 primer periodo</option>
                                    <option value="2020 segundo periodo">2020 segundo periodo</option>
                                    <option value="2021 primer periodo">2021 primer periodo</option>
                                    <option value="2021 segundo periodo">2021 segundo periodo</option>
                                    
                                    </select></td>				
                               </tr>
				<tr>
			        <td>Macroproceso: </td>
					
                                <td><select name="macroproceso" id="SelectID">
                                    
                                            
                                    <option value="Macroproceso 1">Macroproceso 1</option>
                                    <option value="Macroproceso 2">Macroproceso 2</option>
                                    <option value="Macroproceso 3">Macroproceso 3</option>
                                    <option value="Macroproceso 4">Macroproceso 4</option>
                                    
                                    </select></td>				
                               </tr>
                                <tr>
			        <td>Proceso : </td>
					
                                <td><select name="proceso" id="SelectID">
                                    
                                            
                                    <option value="Proceso 1">Proceso 1</option>
                                    <option value="Proceso 2">Proceso 2</option>
                                    <option value="Proceso 3">Proceso 3</option>
                                    <option value="Proceso 4">Proceso 4</option>
                                    <option value="Proceso 5">Proceso 5</option>
                                    <option value="Proceso 6">Proceso 6</option>
                                    <option value="Proceso 7">Proceso 7</option>
                                    <option value="Proceso 8">Proceso 8</option>
                                    <option value="Proceso 9">Proceso 9</option>
                                    <option value="Proceso 10">Proceso 10</option>
                                    
                                    </select></td>				
                               </tr>
                                <tr>
			        <td>Subproceso : </td>
					
                                <td><select name="subproceso" id="SelectID">
                                    
                                            
                                    <option value="subproceso 1">subproceso 1</option>
                                    <option value="subproceso 2">subproceso 2</option>
                                    <option value="subproceso 3">subproceso 3</option>
                                    <option value="subproceso 4">subproceso 4</option>
                                    <option value="subproceso 5">subproceso 5</option>
                                    
                                    
                                    </select></td>				
                               </tr>
                                <tr>
			        <td>Verificador: </td>
					
                                <td><select name="verificador" id="SelectID">
                                    
                                            
                                    <option value="Verificador 1">Verificador 1</option>
                                    <option value="Verificador 2">Verificador 2</option>
                                    <option value="Verificador 3">Verificador 3</option>
                                    <option value="Verificador 4">Verificador 4</option>
                                    <option value="Verificador 5">Verificador 5</option>
                                    <option value="Verificador 6">Verificador 6</option>
                                    <option value="Verificador 7">Verificador 7</option>
                                    <option value="Verificador 8">Verificador 8</option>
                                    <option value="Verificador 9">Verificador 9</option>
                                    <option value="Verificador 10">Verificador 10</option>
                                    <option value="Verificador 11">Verificador 11</option>
                                    <option value="Verificador 12">Verificador 12</option>
                                    <option value="Verificador 13">Verificador 13</option>
                                    <option value="Verificador 14">Verificador 14</option>
                                    <option value="Verificador 15">Verificador 15</option>
                                    <option value="Verificador 16">Verificador 16</option>
                                    
                                    </select></td>				
                               </tr>
                                <tr>
			        <td>Tecnica Evaluativa: </td>
					
                                <td><select name="tecnicasevaluativas" id="SelectID">
                                    
                                            
                                    <option value="tecnicaevaluativa 1">tecnicaevaluativa 1</option>
                                    <option value="tecnicaevaluativa 2">tecnicaevaluativa 2</option>
                                    <option value="tecnicaevaluativa 3">tecnicaevaluativa3</option>
                                    <option value="tecnicaevaluativa 4">tecnicaevaluativa 4</option>
                                    <option value="tecnicaevaluativa 5">tecnicaevaluativa 5</option>
                                    <option value="tecnicaevaluativa 6">tecnicaevaluativa 6</option>
                                    <option value="tecnicaevaluativa 7">tecnicaevaluativa 7</option>
                                    <option value="tecnicaevaluativa 8">tecnicaevaluativa 8</option>
                                    <option value="tecnicaevaluativa 9">tecnicaevaluativa 9</option>
                                    <option value="tecnicaevaluativa 10">tecnicaevaluativa 10</option>
                                    <option value="tecnicaevaluativa 11">tecnicaevaluativa 11</option>
                                    <option value="tecnicaevaluativa 12">tecnicaevaluativa 12</option>
                                    <option value="tecnicaevaluativa 13">tecnicaevaluativa 13</option>
                                    <option value="tecnicaevaluativa 14">tecnicaevaluativa 14</option>
                                    <option value="tecnicaevaluativa 15">tecnicaevaluativa 15</option>
                                    <option value="tecnicaevaluativa 16">tecnicaevaluativa 16</option>
                                    
                                    </select></td>				
                               </tr>
                                
                                <tr>
			        <td>Fuente Referencial: </td>
					
                                <td><select name="fuentereferencial" id="SelectID">
                                    
                                            
                                    <option value="Fuente 1">Fuente 1</option>
                                    <option value="Fuente 2">Fuente 2</option>
                                    <option value="Fuente3">Fuente 3</option>
                                    <option value="Fuente 4">Fuente 4</option>
                                    <option value="Fuente 5">Fuente 5</option>
                                    <option value="Fuente 6">Fuente 6</option>
                                    <option value="Fuente 7">Fuente 7</option>
                                    <option value="Fuente 8">Fuente 8</option>
                                    <option value="Fuente 9">Fuente 9</option>
                                    <option value="Fuente 10">Fuente 10</option>
                                    <option value="Fuente 11">Fuente 11</option>
                                    <option value="Fuente 12">Fuente 12</option>
                                    <option value="Fuente 13">Fuente 13</option>
                                    <option value="Fuente 14">Fuente 14</option>
                                    <option value="Fuente 15">Fuente 15</option>
                                    <option value="Fuente 16">Fuente 16</option>
                                    
                                    </select></td>				
                               </tr>
                                
                                <tr>
			        <td>Criterios Puntuacion : </td>
					
                                <td><select name="criteriospuntuacion" id="SelectID">
                                    
                                            
                                    <option value="criterio xyz">criterio xyz</option>
                                    <option value="criterio abc">criterio abc</option>
                                    <option value="criterio jkl">criterio jkl</option>
                                    
                                    
                                    
                                    </select></td>				
                               </tr>
                                <tr>
					<td>Puntuacion: </td>
					<td><input type="text" name="puntuacion"></td>
				</tr>
                                <tr>
					<td>Observacion: </td>
					<td><input type="text" name="observacion"></td>
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