
<?php
   // Recuperar datos del formulario
   $idDoc=$_POST['idDoc'];
   $nombreDoc=$_POST['nombreDoc'];
   $idEsp=$_POST['idEsp'];
   // El status es A de alta, por eso no lo pedi pero lo asigno a la variable
   $statusDoc="A";
   // Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
   //Guardar los datos en la tabla
   mysqli_query($conexion,"INSERT INTO doctores(idDoc,nombreDoc,statusDoc,idEsp) 
                              VALUES ($idDoc,'$nombreDoc','$statusDoc',$idEsp)");
   mysqli_close($conexion);
   // mandar al programa principla.
   // ESTA LINEA ACTIVARLA HASTA QUE YA PROBAMOS EL PROGRAMA Y FUNCIONA BIEN.
   header("Location:insertDoc1.php"); 
?> 





