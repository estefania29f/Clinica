
<?php
	// Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
	// Recuperar los valores del formulario en variables de PHP
	$idEsp= $_POST['idEsp'];
	$nombreEsp= $_POST['nombreEsp'];
	$costoEsp= $_POST['costoEsp'];
	// actualizar CAMPO por CAMPO  LA CLAVE NUNCA SE CAMBIA
	// en mi caso solo cambia el costo
	mysqli_query($conexion,"UPDATE especialidades set costoEsp='$costoEsp' where idEsp=$idEsp");
	mysqli_close($conexion);
	// Hacer que el programa regrese automaticamente al programa principal.
	// Para no poner un mensaje de Regresar
	header("Location: updateEsp1.php"); 
  ?> 
  
  
 