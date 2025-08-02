
<?php
   // Recuperar datos del formulario
   $idEsp=$_POST['idEsp'];
   $nombreEsp=$_POST['nombreEsp'];
   $costoEsp=$_POST['costoEsp'];
   // Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
   //Guardar los datos en la tabla
   mysqli_query($conexion,"INSERT INTO especialidades(idEsp,nombreEsp,costoEsp) 
                              VALUES ($idEsp,'$nombreEsp',$costoEsp)");
   // cerrar conexion
   mysqli_close($conexion);
   // mandar al programa principal.
   // ESTA LINEA ACTIVARLA HASTA QUE YA PROBAMOS EL PROGRAMA Y FUNCIONA BIEN.
   //header("Location:insertDoc.html"); 
?> 





