<html>
	<form action="insertCon2.php" method="POST"> 
		<center> <br><br><br>
			<fieldset style="width:220" align="center">
				<legend>REGISTRO DE CONSULTAS</legend><br><br>
				No. de consulta <input type="number" name="numCon"><br>
			    Fecha <br><input type="date" name="fechaCon"><br>
			    Paciente 
				<select name="idPac">
					<?php
						if (!($link=@mysql_connect("localhost","root",""))) 
						{ echo "Error al conectar con el servidor.";  exit(); } 
						// conectarse a la BD
						if (!mysql_select_db("clinicasanmiguel",$link)) 
						{  echo "Error al seleccionar la base de datos.";  exit(); }
						// Hago una tabla virtual con los datos de las especialidades
						$query="SELECT * FROM  pacientes";
						$resultado = mysql_query($query);
						//Verificar si hay datos 
						if ($resultado)
						{
							while($renglon = mysql_fetch_array($resultado))
							{
								$valor1=$renglon['idPac'];
								$valor2=$renglon['nombrePac'];
								echo "<option value=" .$valor1. ">" .$valor2."</option>";
							}
						}
						mysql_close($link);
					?>
				</select>
				<br> Especialidad
				<select name="idEsp">
					<?php
						if (!($link=@mysql_connect("localhost","root",""))) 
						{ echo "Error al conectar con el servidor.";  exit(); } 
						// conectarse a la BD
						if (!mysql_select_db("clinicasanmiguel",$link)) 
						{  echo "Error al seleccionar la base de datos.";  exit(); }
						// Hago una tabla virtual con los datos de las especialidades
						$query="SELECT * FROM  especialidades";
						$resultado = mysql_query($query);
						//Verificar si hay datos 
						if ($resultado)
						{
							while($renglon = mysql_fetch_array($resultado))
							{
								$valor1=$renglon['idEsp'];
								$valor2=$renglon['nombreEsp'];
								echo "<option value=" .$valor1. ">" .$valor2."</option>";
							}
						}
						mysql_close($link);
					?>
				</select>
				
				Doctor <br>
				<select name="idDoc">
					<?php
						if (!($link=@mysql_connect("localhost","root",""))) 
						{ echo "Error al conectar con el servidor.";  exit(); } 
						// conectarse a la BD
						if (!mysql_select_db("clinicasanmiguel",$link)) 
						{  echo "Error al seleccionar la base de datos.";  exit(); }
						// Hago una tabla virtual con los datos de las especialidades
						$query="SELECT * FROM  doctores";
						$resultado = mysql_query($query);
						//Verificar si hay datos 
						if ($resultado)
						{
							while($renglon = mysql_fetch_array($resultado))
							{
								$valor1=$renglon['idDoc'];
								$valor2=$renglon['nombreDoc'];
								echo "<option value=" .$valor1. ">" .$valor2."</option>";
							}
						}
						mysql_close($link);
					?>
				</select>
				
				<!-- Aqui sigue lo de html -->
				<br><br><input type="submit" value="Enviar">
				<input type="reset" value="Limpiar" >  
			</fieldset>
		</center>
	</form>
</html>