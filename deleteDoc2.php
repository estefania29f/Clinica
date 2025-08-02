
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
   mysqli_query($conexion,"UPDATE doctores set statusDoc='B' where idDoc=$id");
   mysqli_close($conexion);
   $row=mysqli_fetch_assoc($resultado);
   // diseñar el formulario y asignar el valor 
   // Para no poner un mensaje de Regresar
	header("Location: deleteDoc1.php"); 
?>
