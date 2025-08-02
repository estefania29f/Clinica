
<?php 
   // Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
   // en una variable de php recupero el dato que el usuario dio en el formulario
   $id=$_GET['id']; 
   // Hago un filtro para todos aquellos que tengan esa clave
   $resultado=mysqli_query($conexion,"SELECT * FROM especialidades WHERE idEsp = $id");
   $row=mysqli_fetch_assoc($resultado);
   // diseñar el formulario y asignar el valor 
?>

<!-- Aqui empieza codigo de html -->
<form action="updateEsp3.php" method="POST">
	<center>
		<br><br><br><br>
		<fieldset style="width:220" align="center">
			<font color="blue"><b>
				<legend>ACTUALIZAR PRECIO DE ESPECIALIDADES </legend><br>
			</font></b>
			<br>Id especialidad : 
			<!-- readOnly permite ver el dato pero no modificarlo yo solo quiero actualizar el costo -->
			<input  type="text" name="idEsp" readonly  value =" <?php echo $row['idEsp']?>">
			<br>Especialidad : 
			<input type="text" name="nombreEsp" readonly value =" <?php echo $row['nombreEsp']?>">
			<br>Costo: 
			<input type="text" name="costoEsp" value =" <?php echo $row['costoEsp']?>">
			<br><br><input type="submit" value="Salvar">
		</fieldset>
	</center>	
</form>

  


